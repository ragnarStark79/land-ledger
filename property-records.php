
<?php
// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Property Records</h1>
      <p class="text-lg mb-8">Access comprehensive property information including ownership history, property boundaries, and official documents.</p>
      <div class="flex justify-center gap-4">
        <a href="search-records.php" class="btn btn-primary">
          <i class="fa-solid fa-search mr-2"></i>Search Records
        </a>
        <a href="record-types.php" class="btn btn-outline">
          <i class="fa-solid fa-list mr-2"></i>Record Types
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Record Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="feature-card">
        <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-file-lines text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Land Titles</h3>
        <p class="text-gray-600 mb-4">Official documents that show legal ownership of land properties.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          View Details <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-map text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Survey Plans</h3>
        <p class="text-gray-600 mb-4">Certified surveys showing boundaries and dimensions of properties.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          View Details <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-building text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Property Deeds</h3>
        <p class="text-gray-600 mb-4">Legal documents used to transfer property ownership between parties.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          View Details <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
    
    <!-- Recent Records -->
    <div class="mb-16">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Recently Updated Records</h2>
        <a href="recent-updates.php" class="text-primary hover:underline flex items-center">
          View All <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property Address</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php
              // Sample data - in a real application, this would come from the database
              $recentRecords = [
                ['id' => 'LR-2023-0542', 'address' => '123 Main St, Cityville', 'type' => 'Deed Transfer', 'updated' => '2023-04-10'],
                ['id' => 'LR-2023-0538', 'address' => '456 Oak Ave, Townsburg', 'type' => 'Title Registration', 'updated' => '2023-04-09'],
                ['id' => 'LR-2023-0521', 'address' => '789 Pine Rd, Villageton', 'type' => 'Survey Plan', 'updated' => '2023-04-08'],
                ['id' => 'LR-2023-0498', 'address' => '101 Cedar Ln, Hamletville', 'type' => 'Deed Transfer', 'updated' => '2023-04-07'],
              ];
              
              foreach ($recentRecords as $record):
            ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $record['id']; ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $record['address']; ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $record['type']; ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $record['updated']; ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#" class="text-primary hover:underline">View</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- How It Works -->
    <div>
      <h2 class="text-2xl font-semibold text-center mb-12">How to Access Property Records</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 bg-gov-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-gov-600 font-bold text-xl">1</span>
          </div>
          <h3 class="font-semibold mb-2">Search</h3>
          <p class="text-gray-600">Enter property details like address, owner name, or record ID</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 bg-earth-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-earth-600 font-bold text-xl">2</span>
          </div>
          <h3 class="font-semibold mb-2">Select</h3>
          <p class="text-gray-600">Choose the specific record you need from search results</p>
        </div>
        
        <div class="text-center">
          <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-gold-700 font-bold text-xl">3</span>
          </div>
          <h3 class="font-semibold mb-2">Access</h3>
          <p class="text-gray-600">View, download, or order certified copies of records</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Need Help Finding Property Records?</h2>
      <p class="text-lg mb-8 text-white/90">Our support team is available to assist you with locating and understanding property records.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="contact.php" class="btn bg-white text-gov-700 hover:bg-gray-100">Contact Support</a>
        <a href="help-center.php" class="btn bg-white/20 text-white hover:bg-white/30">Visit Help Center</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
