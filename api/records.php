
<?php
// Include database configuration
require_once '../config/database.php';

// Set content type to JSON
header('Content-Type: application/json');

// Get HTTP method and action
$method = $_SERVER['REQUEST_METHOD'];
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Handle API requests
switch ($method) {
    case 'GET':
        // Handle GET requests
        if ($action === 'search') {
            // Search records
            $searchType = isset($_GET['search_type']) ? $_GET['search_type'] : '';
            $searchValue = isset($_GET['search_value']) ? $_GET['search_value'] : '';
            $district = isset($_GET['district']) ? $_GET['district'] : 'all';
            $propertyType = isset($_GET['property_type']) ? $_GET['property_type'] : 'all';
            
            // Build query
            $sql = "SELECT * FROM land_records WHERE 1=1";
            $params = [];
            
            if (!empty($searchValue)) {
                switch ($searchType) {
                    case 'property_id':
                        $sql .= " AND property_id LIKE ?";
                        $params[] = "%$searchValue%";
                        break;
                    case 'owner_name':
                        $sql .= " AND owner_name LIKE ?";
                        $params[] = "%$searchValue%";
                        break;
                    case 'address':
                        $sql .= " AND address LIKE ?";
                        $params[] = "%$searchValue%";
                        break;
                    case 'survey_number':
                        $sql .=  " AND survey_number LIKE ?";
                        $params[] = "%$searchValue%";
                        break;
                }
            }
            
            // Add district filter
            if ($district !== 'all') {
                $sql .= " AND district = ?";
                $params[] = $district;
            }
            
            // Add property type filter
            if ($propertyType !== 'all') {
                $sql .= " AND property_type = ?";
                $params[] = $propertyType;
            }
            
            // For demo, create sample data
            if (!$pdo) {
                // Demo data
                $records = [
                    [
                        'property_id' => 'PROP123456',
                        'survey_number' => 'SUR/2022/123456',
                        'owner_name' => 'John Doe',
                        'address' => '123 Main Street, North District',
                        'property_type' => 'Residential',
                        'area' => '1200 sq.ft',
                        'registration_date' => '2022-05-15',
                        'status' => 'Active'
                    ],
                    [
                        'property_id' => 'PROP789012',
                        'survey_number' => 'SUR/2021/789012',
                        'owner_name' => 'Jane Smith',
                        'address' => '456 Park Avenue, East District',
                        'property_type' => 'Commercial',
                        'area' => '2500 sq.ft',
                        'registration_date' => '2021-11-20',
                        'status' => 'Active'
                    ]
                ];
                
                // Filter records for demo
                $filteredRecords = [];
                foreach ($records as $record) {
                    $match = true;
                    
                    if (!empty($searchValue)) {
                        $match = false;
                        switch ($searchType) {
                            case 'property_id':
                                if (stripos($record['property_id'], $searchValue) !== false) {
                                    $match = true;
                                }
                                break;
                            case 'owner_name':
                                if (stripos($record['owner_name'], $searchValue) !== false) {
                                    $match = true;
                                }
                                break;
                            case 'address':
                                if (stripos($record['address'], $searchValue) !== false) {
                                    $match = true;
                                }
                                break;
                            case 'survey_number':
                                if (stripos($record['survey_number'], $searchValue) !== false) {
                                    $match = true;
                                }
                                break;
                        }
                    }
                    
                    if ($match && $district !== 'all') {
                        $match = stripos($record['address'], ucfirst($district)) !== false;
                    }
                    
                    if ($match && $propertyType !== 'all') {
                        $match = strcasecmp($record['property_type'], ucfirst($propertyType)) === 0;
                    }
                    
                    if ($match) {
                        $filteredRecords[] = $record;
                    }
                }
                
                echo json_encode([
                    'status' => 'success',
                    'records' => $filteredRecords
                ]);
            } else {
                $records = executeQuery($sql, $params);
                echo json_encode([
                    'status' => 'success',
                    'records' => $records
                ]);
            }
        } elseif ($action === 'get') {
            // Get single record
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            
            if (empty($id)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Property ID is required'
                ]);
                exit;
            }
            
            // For demo, create sample data
            if (!$pdo) {
                if ($id === 'PROP123456') {
                    echo json_encode([
                        'status' => 'success',
                        'record' => [
                            'property_id' => 'PROP123456',
                            'survey_number' => 'SUR/2022/123456',
                            'owner_name' => 'John Doe',
                            'address' => '123 Main Street, North District',
                            'property_type' => 'Residential',
                            'area' => '1200 sq.ft',
                            'registration_date' => '2022-05-15',
                            'status' => 'Active'
                        ]
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Record not found'
                    ]);
                }
            } else {
                $record = executeQuery("SELECT * FROM land_records WHERE property_id = ?", [$id]);
                
                if ($record && count($record) > 0) {
                    echo json_encode([
                        'status' => 'success',
                        'record' => $record[0]
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Record not found'
                    ]);
                }
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid action'
            ]);
        }
        break;
    
    case 'POST':
        // Handle POST requests (requires authentication - not implemented in demo)
        echo json_encode([
            'status' => 'error',
            'message' => 'Authentication required for this operation'
        ]);
        break;
    
    default:
        // Method not allowed
        http_response_code(405);
        echo json_encode([
            'status' => 'error',
            'message' => 'Method not allowed'
        ]);
        break;
}
?>
