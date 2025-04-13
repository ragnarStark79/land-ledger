<?php
// Start session
session_start();

// Include database configuration
require_once 'config/database.php';

// Initialize variables
$error = '';
$success = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $description = isset($_POST['description']) ? trim($_POST['description']) : '';

    // Validate inputs
    if (empty($name) || empty($email) || empty($subject) || empty($description)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address.';
    } else {
        // Insert issue into the database
        $stmt = $pdo->prepare("INSERT INTO issues (name, email, subject, description) VALUES (:name, :email, :subject, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            $success = 'Your issue has been reported successfully.';
        } else {
            $error = 'Failed to report the issue. Please try again.';
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12">
    <div class="container-custom max-w-lg mx-auto">
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold mb-2">Report an Issue</h1>
            <p class="text-gray-600">Let us know about any issues or feedback you have.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md">
            <?php if (!empty($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                    <p class="text-sm text-red-700"><?php echo $error; ?></p>
                </div>
            <?php elseif (!empty($success)): ?>
                <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                    <p class="text-sm text-green-700"><?php echo $success; ?></p>
                </div>
            <?php endif; ?>

            <form class="space-y-4" action="report-issue.php" method="POST">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                    <input type="text" id="name" name="name" class="input w-full" placeholder="John Doe" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="input w-full" placeholder="john@example.com" required>
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium mb-1">Subject</label>
                    <input type="text" id="subject" name="subject" class="input w-full" placeholder="Brief subject of the issue" required>
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium mb-1">Description</label>
                    <textarea id="description" name="description" rows="4" class="input w-full" placeholder="Describe the issue in detail..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-full">Submit Issue</button>
            </form>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
