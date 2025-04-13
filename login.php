<?php
// Start session
session_start();

// Include database configuration
require_once 'config/database.php';
require_once 'includes/auth.php';

// Redirect logged-in users to the dashboard
if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit;
}

// Initialize variables
$error = '';

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    // Validate inputs
    if (empty($email)) {
        $error = 'Please enter your email address.';
    } elseif (empty($password)) {
        $error = 'Please enter your password.';
    } else {
        try {
            // Query the database for the user
            $stmt = $pdo->prepare("SELECT id, email, name, password FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['loggedin'] = true;

                // Redirect to intended page or dashboard
                $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'dashboard.php';
                header("Location: $redirect");
                exit;
            } else {
                $error = 'Invalid email or password.';
            }
        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage(); // Debugging statement
        }
    }
}

// Display message if passed via query parameter
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

// Include header
include 'includes/header.php';
?>

<main class="py-12">
    <div class="container-custom max-w-md mx-auto">
        <?php if (!empty($message)): ?>
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
                <p class="text-sm text-blue-700"><?php echo $message; ?></p>
            </div>
        <?php endif; ?>
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold mb-2">Login to Your Account</h1>
            <p class="text-gray-600">Access your property records and tax information</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-md">
            <?php if (!empty($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-circle-exclamation text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                <?php echo $error; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <form class="space-y-4" action="login.php" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="input w-full" placeholder="you@example.com" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" id="password" name="password" class="input w-full" placeholder="••••••••" required>
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    
                    <a href="forgot-password.php" class="text-sm font-medium text-primary hover:underline">
                        Forgot password?
                    </a>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fa-solid fa-right-to-bracket mr-2"></i>
                        Sign In
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account?
                    <a href="register.php" class="font-medium text-primary hover:underline">
                        Create an account
                    </a>
                </p>
            </div>
            
            <div class="mt-6 relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or continue with</span>
                </div>
            </div>
            
            <div class="mt-6 grid grid-cols-3 gap-3">
                <button type="button" class="btn btn-outline w-full flex justify-center">
                    <i class="fa-brands fa-google"></i>
                </button>
                <button type="button" class="btn btn-outline w-full flex justify-center">
                    <i class="fa-brands fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-outline w-full flex justify-center">
                    <i class="fa-brands fa-twitter"></i>
                </button>
            </div>
            
            <div class="mt-6 text-center text-xs text-gray-500">
                <p>For demo purposes, use:</p>
                <p>Email: demo@example.com</p>
                <p>Password: password123</p>
            </div>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
