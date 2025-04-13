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
                $success = 'Registration successful. You can now log in.';
            } else {
                $error = 'An error occurred. Please try again.';
            }
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12 bg-gradient-to-b from-gradient-start to-gradient-end min-h-screen">
  <div class="container mx-auto">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
      <h1 class="text-3xl font-bold text-center mb-6">Register</h1>
      <form action="register.php" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
          <input type="text" id="name" name="name" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required>
        </div>
        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" id="confirm_password" name="confirm_password" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required>
        </div>
        <div>
          <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
          <input type="date" id="dob" name="dob" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required>
        </div>
        <div>
          <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
          <textarea id="address" name="address" class="input w-full border-gray-300 rounded-md shadow-sm focus:ring-gradient-start focus:border-gradient-start" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-full bg-gradient-to-r from-gradient-start to-gradient-end text-white font-bold py-2 rounded-md shadow-md hover:opacity-90">Register</button>
      </form>
    </div>
  </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
