
<?php
// Include database configuration
require_once '../config/database.php';

// Set content type to JSON
header('Content-Type: application/json');

// Get HTTP method and action
$method = $_SERVER['REQUEST_METHOD'];
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Simple session-based authentication
session_start();

// Handle API requests
switch ($method) {
    case 'POST':
        // Handle POST requests
        if ($action === 'login') {
            // Login user
            $postData = json_decode(file_get_contents('php://input'), true);
            
            $email = isset($postData['email']) ? $postData['email'] : '';
            $password = isset($postData['password']) ? $postData['password'] : '';
            
            // Validate input
            if (empty($email) || empty($password)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Email and password are required'
                ]);
                exit;
            }
            
            // For demo, check against hardcoded credentials
            if ($email === 'demo@example.com' && $password === 'password123') {
                // Set session variables
                $_SESSION['user_id'] = 1;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = 'Demo User';
                
                echo json_encode([
                    'status' => 'success',
                    'user' => [
                        'id' => 1,
                        'email' => $email,
                        'name' => 'Demo User'
                    ]
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid email or password'
                ]);
            }
        } elseif ($action === 'register') {
            // Register new user
            $postData = json_decode(file_get_contents('php://input'), true);
            
            $name = isset($postData['name']) ? $postData['name'] : '';
            $email = isset($postData['email']) ? $postData['email'] : '';
            $password = isset($postData['password']) ? $postData['password'] : '';
            
            // Validate input
            if (empty($name) || empty($email) || empty($password)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Name, email, and password are required'
                ]);
                exit;
            }
            
            // For demo, simulate user creation
            echo json_encode([
                'status' => 'success',
                'message' => 'User registered successfully',
                'user' => [
                    'id' => 2,
                    'name' => $name,
                    'email' => $email
                ]
            ]);
        } elseif ($action === 'logout') {
            // Logout user
            // Destroy session
            session_unset();
            session_destroy();
            
            echo json_encode([
                'status' => 'success',
                'message' => 'Logged out successfully'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid action'
            ]);
        }
        break;
    
    case 'GET':
        // Handle GET requests
        if ($action === 'profile') {
            // Check if user is logged in
            if (isset($_SESSION['user_id'])) {
                echo json_encode([
                    'status' => 'success',
                    'user' => [
                        'id' => $_SESSION['user_id'],
                        'name' => $_SESSION['user_name'],
                        'email' => $_SESSION['user_email']
                    ]
                ]);
            } else {
                http_response_code(401);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Unauthorized'
                ]);
            }
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
