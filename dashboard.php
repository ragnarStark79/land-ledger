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

// Fetch the account creation date from the database
$stmt = $pdo->prepare("SELECT created_at FROM users WHERE id = :id");
$stmt->bindParam(':id', $currentUser['id']);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
$accountCreatedDate = $userData ? date('F j, Y', strtotime($userData['created_at'])) : 'Unknown';

// Fetch a demo property for the user
$demoProperty = [
    'property_id' => 'PROP123456',
    'address' => '123 Main Street, North District',
    'type' => 'Residential',
    'value' => '$500,000',
    'tax_due' => '$1,250',
    'due_date' => 'June 30, 2024',
];

// Include header
include 'includes/header.php';
?>

<main class="py-12 bg-gradient-to-b from-white to-gray-100">
    <div class="container-custom">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-500 to-green-500 text-white p-6 rounded-lg shadow-lg mb-8">
            <h1 class="text-3xl font-bold mb-2">Hello, <?php echo ucwords(htmlspecialchars($currentUser['name'])); ?>! 👋</h1>
            <p class="text-lg">Welcome back! Here's a quick overview of your account and property details.</p>
        </div>

        <!-- User Details Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Your Details</h2>
            <div class="bg-white p-6 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <p class="text-sm text-gray-500">Name</p>
                    <p class="font-medium text-lg"><?php echo ucwords(htmlspecialchars($currentUser['name'])); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="font-medium text-lg"><?php echo htmlspecialchars($currentUser['email']); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-500">Account Created</p>
                    <p class="font-medium text-lg"><?php echo $accountCreatedDate; ?></p>
                </div>
            </div>
        </section>

        <!-- Demo Property Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Your Demo Property</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-gray-500">Property ID</p>
                        <p class="font-medium text-lg"><?php echo $demoProperty['property_id']; ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Address</p>
                        <p class="font-medium text-lg"><?php echo $demoProperty['address']; ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Type</p>
                        <p class="font-medium text-lg"><?php echo $demoProperty['type']; ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Value</p>
                        <p class="font-medium text-lg"><?php echo $demoProperty['value']; ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Tax Due</p>
                        <p class="font-medium text-lg text-red-500"><?php echo $demoProperty['tax_due']; ?></p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Due Date</p>
                        <p class="font-medium text-lg"><?php echo $demoProperty['due_date']; ?></p>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <a href="pay-tax.php?property_id=<?php echo $demoProperty['property_id']; ?>" class="btn btn-primary px-6 py-3 text-lg">
                        <i class="fa-solid fa-credit-card mr-2"></i> Pay Tax
                    </a>
                </div>
            </div>
        </section>

        <!-- Quick Links Section -->
        <section>
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Quick Links</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="property-records.php" class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
                    <i class="fa-solid fa-file-lines text-3xl mb-4"></i>
                    <h3 class="font-medium text-lg">View Property Records</h3>
                    <p class="text-sm">Access and manage your property records.</p>
                </a>
                <a href="property-tax.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
                    <i class="fa-solid fa-landmark text-3xl mb-4"></i>
                    <h3 class="font-medium text-lg">Manage Property Taxes</h3>
                    <p class="text-sm">Calculate, view, and pay your taxes.</p>
                </a>
                <a href="tax-forms.php" class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
                    <i class="fa-solid fa-file-alt text-3xl mb-4"></i>
                    <h3 class="font-medium text-lg">Download Tax Forms</h3>
                    <p class="text-sm">Access official tax forms and applications.</p>
                </a>
                <a href="contact-us.php" class="bg-gradient-to-r from-red-500 to-pink-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
                    <i class="fa-solid fa-headset text-3xl mb-4"></i>
                    <h3 class="font-medium text-lg">Contact Support</h3>
                    <p class="text-sm">Get help from our support team.</p>
                </a>
                <a href="payment-history.php" class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
                    <i class="fa-solid fa-clock-rotate-left text-3xl mb-4"></i>
                    <h3 class="font-medium text-lg">Payment History</h3>
                    <p class="text-sm">View your past payments and receipts.</p>
                </a>
            </div>
        </section>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
