<?php
// Start session
session_start();

// Include database configuration and authentication utilities
require_once 'config/database.php';
require_once 'includes/auth.php';

// Check if the user is logged in
if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

// Get the current user details
$currentUser = getCurrentUser();

// Initialize variables
$success = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $notifications = isset($_POST['notifications']) ? 1 : 0;

    // Validate inputs
    if (empty($name)) {
        $error = 'Name cannot be empty.';
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        try {
            // Update user details in the database
            $sql = "UPDATE users SET name = :name, email = :email, notifications = :notifications";
            $params = [
                ':name' => $name,
                ':email' => $email,
                ':notifications' => $notifications,
                ':id' => $currentUser['id']
            ];

            // Update password if provided
            if (!empty($password)) {
                $sql .= ", password = :password";
                $params[':password'] = password_hash($password, PASSWORD_DEFAULT);
            }

            $sql .= " WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            $success = 'Settings updated successfully.';
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
        } catch (PDOException $e) {
            $error = 'An error occurred while updating your settings. Please try again.';
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12 bg-gradient-to-b from-white to-gray-100">
    <div class="container-custom">
        <!-- Maintenance Warning -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
            <p class="text-sm text-yellow-700 font-semibold">
                ⚠️ This page is currently under maintenance and not functional. It will be updated soon.
            </p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Settings</h1>

            <?php if (!empty($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                    <p class="text-sm text-red-700"><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                    <p class="text-sm text-green-700"><?php echo $success; ?></p>
                </div>
            <?php endif; ?>

            <form action="settings.php" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" id="name" name="name" class="input w-full" value="<?php echo htmlspecialchars($currentUser['name']); ?>" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="input w-full" value="<?php echo htmlspecialchars($currentUser['email']); ?>" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium mb-1">New Password (optional)</label>
                    <input type="password" id="password" name="password" class="input w-full" placeholder="Leave blank to keep current password">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="notifications" name="notifications" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" <?php echo $currentUser['notifications'] ? 'checked' : ''; ?>>
                    <label for="notifications" class="ml-2 block text-sm text-gray-700">Enable email notifications</label>
                </div>

                <button type="submit" class="btn btn-primary w-full">Save Changes</button>
            </form>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
