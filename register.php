<?php
// Start session
session_start();

// Include database configuration
require_once 'config/database.php';

// Initialize variables
$error = '';
$success = '';

// Process registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';

    // Validate inputs
    if (empty($name)) {
        $error = 'Please enter your name.';
    } elseif (empty($email)) {
        $error = 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (empty($password)) {
        $error = 'Please enter your password.';
    } elseif ($password !== $confirm_password) {
        $error = 'Passwords do not match.';
    } elseif (empty($dob)) {
        $error = 'Please enter your date of birth.';
    } elseif (empty($address)) {
        $error = 'Please enter your address.';
    } else {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $error = 'Email is already registered.';
        } else {
            // Hash the password and insert the user into the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (name, dob, address, email, password) VALUES (:name, :dob, :address, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);

            if ($stmt->execute()) {
                $success = 'Registration successful. <a href="login.php" class="text-blue-500 underline">Go to login</a> and log in there.';
            } else {
                $error = 'An error occurred. Please try again.';
            }
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12">
    <div class="container-custom max-w-md mx-auto">
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold mb-2">Create Your Account</h1>
            <p class="text-gray-600">Sign up to access your property records and tax information</p>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-md">
            <?php if (!empty($success)): ?>
                <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-circle-check text-green-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700">
                                <?php echo $success; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php elseif (!empty($error)): ?>
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
            
            <form class="space-y-4" action="register.php" method="POST">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" id="name" name="name" class="input w-full" placeholder="John Doe" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="input w-full" placeholder="you@example.com" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" id="password" name="password" class="input w-full" placeholder="••••••••" required>
                </div>
                
                <div>
                    <label for="confirm_password" class="block text-sm font-medium mb-1">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="input w-full" placeholder="••••••••" required>
                </div>
                
                <div>
                    <label for="dob" class="block text-sm font-medium mb-1">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="input w-full" value="<?php echo isset($dob) ? htmlspecialchars($dob) : ''; ?>" required>
                </div>
                
                <div>
                    <label for="address" class="block text-sm font-medium mb-1">Address</label>
                    <textarea id="address" name="address" class="input w-full" placeholder="123 Main St, City, Country" required><?php echo isset($address) ? htmlspecialchars($address) : ''; ?></textarea>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="fa-solid fa-user-plus mr-2"></i>
                        Register
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="login.php" class="font-medium text-primary hover:underline">
                        Sign in here
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
