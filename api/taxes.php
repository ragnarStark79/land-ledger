
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
        if ($action === 'calculate') {
            // Tax calculation
            $propertyValue = isset($_GET['property_value']) ? floatval($_GET['property_value']) : 0;
            $propertyType = isset($_GET['property_type']) ? $_GET['property_type'] : 'residential';
            $propertyAge = isset($_GET['property_age']) ? intval($_GET['property_age']) : 0;
            $district = isset($_GET['district']) ? $_GET['district'] : 'north';
            $exemptions = isset($_GET['exemptions']) ? $_GET['exemptions'] : [];
            
            // Validate input
            if ($propertyValue <= 0) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Property value must be greater than zero'
                ]);
                exit;
            }
            
            // Set tax rate based on property type
            $taxRate = 0.025; // Default 2.5% for residential
            switch($propertyType) {
                case 'commercial':
                    $taxRate = 0.035; // 3.5%
                    break;
                case 'agricultural':
                    $taxRate = 0.015; // 1.5%
                    break;
                case 'industrial':
                    $taxRate = 0.04; // 4%
                    break;
            }
            
            // Calculate exemptions
            $exemptionValue = 0;
            if (is_array($exemptions)) {
                foreach ($exemptions as $exemption) {
                    switch($exemption) {
                        case 'senior_citizen':
                            $exemptionValue += $propertyValue * 0.05; // 5% exemption
                            break;
                        case 'first_time_owner':
                            $exemptionValue += $propertyValue * 0.03; // 3% exemption
                            break;
                        case 'energy_efficient':
                            $exemptionValue += $propertyValue * 0.02; // 2% exemption
                            break;
                        case 'historic_property':
                            $exemptionValue += $propertyValue * 0.04; // 4% exemption
                            break;
                    }
                }
            }
            
            // Apply property age adjustment (older properties get a small discount)
            $ageDiscount = min($propertyAge * 0.001, 0.05); // Maximum 5% discount for age
            
            // Calculate final tax
            $netValue = $propertyValue - $exemptionValue;
            $taxRate = $taxRate * (1 - $ageDiscount); // Apply age discount to tax rate
            $totalTax = $netValue * $taxRate;
            $quarterlyTax = $totalTax / 4;
            
            echo json_encode([
                'status' => 'success',
                'calculation' => [
                    'property_value' => $propertyValue,
                    'base_tax_rate' => $taxRate,
                    'exemption_value' => $exemptionValue,
                    'net_value' => $netValue,
                    'total_tax' => $totalTax,
                    'quarterly_tax' => $quarterlyTax
                ]
            ]);
        } elseif ($action === 'lookup') {
            // Tax record lookup
            $propertyId = isset($_GET['property_id']) ? $_GET['property_id'] : '';
            
            if (empty($propertyId)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Property ID is required'
                ]);
                exit;
            }
            
            // For demo, create sample data
            if (!$pdo) {
                if ($propertyId === 'PROP123456') {
                    echo json_encode([
                        'status' => 'success',
                        'tax_info' => [
                            'property_id' => 'PROP123456',
                            'owner_name' => 'John Doe',
                            'address' => '123 Main Street, North District',
                            'property_type' => 'Residential',
                            'tax_amount' => 1250.00,
                            'due_date' => '2024-06-30',
                            'tax_status' => 'Pending'
                        ]
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Tax record not found for the provided Property ID'
                    ]);
                }
            } else {
                $taxRecord = executeQuery("SELECT * FROM property_taxes WHERE property_id = ?", [$propertyId]);
                
                if ($taxRecord && count($taxRecord) > 0) {
                    echo json_encode([
                        'status' => 'success',
                        'tax_info' => $taxRecord[0]
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Tax record not found for the provided Property ID'
                    ]);
                }
            }
        } elseif ($action === 'history') {
            // Tax payment history
            $propertyId = isset($_GET['property_id']) ? $_GET['property_id'] : '';
            
            if (empty($propertyId)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Property ID is required'
                ]);
                exit;
            }
            
            // For demo, create sample data
            if (!$pdo) {
                if ($propertyId === 'PROP123456') {
                    echo json_encode([
                        'status' => 'success',
                        'payments' => [
                            [
                                'transaction_id' => 'TXN123456789',
                                'payment_date' => '2024-04-12',
                                'amount' => 1250.00,
                                'payment_method' => 'Credit Card',
                                'status' => 'Completed'
                            ],
                            [
                                'transaction_id' => 'TXN987654321',
                                'payment_date' => '2024-01-15',
                                'amount' => 1250.00,
                                'payment_method' => 'Net Banking',
                                'status' => 'Completed'
                            ],
                            [
                                'transaction_id' => 'TXN456789123',
                                'payment_date' => '2023-10-10',
                                'amount' => 1250.00,
                                'payment_method' => 'UPI',
                                'status' => 'Completed'
                            ]
                        ]
                    ]);
                } else {
                    echo json_encode([
                        'status' => 'success',
                        'payments' => []
                    ]);
                }
            } else {
                $payments = executeQuery("SELECT * FROM tax_payments WHERE property_id = ? ORDER BY payment_date DESC", [$propertyId]);
                
                echo json_encode([
                    'status' => 'success',
                    'payments' => $payments ?: []
                ]);
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid action'
            ]);
        }
        break;
    
    case 'POST':
        // Handle POST requests for tax payment
        if ($action === 'pay') {
            // Get POST data
            $postData = json_decode(file_get_contents('php://input'), true);
            
            $propertyId = isset($postData['property_id']) ? $postData['property_id'] : '';
            $amount = isset($postData['amount']) ? floatval($postData['amount']) : 0;
            $paymentMethod = isset($postData['payment_method']) ? $postData['payment_method'] : '';
            
            // Validate input
            if (empty($propertyId)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Property ID is required'
                ]);
                exit;
            }
            
            if ($amount <= 0) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Payment amount must be greater than zero'
                ]);
                exit;
            }
            
            if (empty($paymentMethod)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Payment method is required'
                ]);
                exit;
            }
            
            // For demo, simulate payment processing
            $transactionId = 'TXN' . time();
            
            // In a real application, process payment here
            
            echo json_encode([
                'status' => 'success',
                'payment' => [
                    'transaction_id' => $transactionId,
                    'property_id' => $propertyId,
                    'amount' => $amount,
                    'payment_method' => $paymentMethod,
                    'payment_date' => date('Y-m-d'),
                    'status' => 'Completed'
                ]
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid action'
            ]);
        }
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
