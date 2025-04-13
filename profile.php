<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'includes/auth.php';
require_once 'config/database.php'; // Ensure database connection is included

$isLoggedIn = isLoggedIn();
if (!$isLoggedIn) {
    header('Location: login.php');
    exit;
}

// Fetch the current user data, including account creation date
$currentUser = getCurrentUser();

if ($currentUser) {
    try {
        $stmt = $pdo->prepare("SELECT name, email, created_at FROM users WHERE id = :id");
        $stmt->bindParam(':id', $currentUser['id'], PDO::PARAM_INT);
        $stmt->execute();
        $currentUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$currentUser) {
            throw new Exception("User data not found in the database.");
        }

        // Provide default values for missing fields
        $currentUser['created_at'] = $currentUser['created_at'] ? date('F j, Y', strtotime($currentUser['created_at'])) : 'Not provided';
        $profilePictureUrl = "https://c4.wallpaperflare.com/wallpaper/994/815/596/vikings-vikings-tv-series-ragnar-lodbrok-travis-fimmel-wallpaper-preview.jpg"; // Replace with the desired default URL
    } catch (Exception $e) {
        die("Error fetching user data: " . $e->getMessage());
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12 bg-gradient-to-b from-background to-muted min-h-screen">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
      <div class="bg-gradient-to-r from-gov-600 to-earth-600 p-6 text-center">
        <h1 class="text-3xl font-bold text-white">Profile</h1>
      </div>
      <div class="p-6">
        <?php if ($currentUser): ?>
          <div class="flex items-center space-x-4 mb-6">
            <?php if (!empty($profilePictureUrl)): ?>
              <img src="<?php echo htmlspecialchars($profilePictureUrl); ?>" alt="Profile Picture" class="h-24 w-24 rounded-full shadow-md">
            <?php else: ?>
              <i class="fa-solid fa-user-circle text-6xl text-gray-400"></i>
            <?php endif; ?>
            <div>
              <h2 class="text-2xl font-semibold text-gray-800"><?php echo htmlspecialchars($currentUser['name'] ?? ''); ?></h2>
              <p class="text-gray-600"><?php echo htmlspecialchars($currentUser['email'] ?? ''); ?></p>
            </div>
          </div>
          <div class="space-y-4">
            <!-- Removed: Account Created -->
          </div>
          <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Your Details</h2>
            <div class="bg-white p-6 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <p class="text-sm text-gray-500">Name</p>
                    <p class="font-medium text-lg"><?php echo htmlspecialchars($currentUser['name']); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-500">Email</p>
                    <p class="font-medium text-lg"><?php echo htmlspecialchars($currentUser['email']); ?></p>
                </div>
                <!-- Removed: Account Created -->
            </div>
          </section>
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
        <?php else: ?>
          <p class="text-gray-600">No user data found.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
