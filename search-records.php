
<?php
// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';

// Initialize search parameters and results
$search_query = isset($_GET['q']) ? trim($_GET['q']) : '';
$search_type = isset($_GET['type']) ? $_GET['type'] : 'address';
$search_results = [];

// Process search if query submitted
if (!empty($search_query)) {
    // In a real application, you would search the database
    // For demo purposes, we'll use sample data
    $search_results = [
        ['id' => 'LR-2023-0542', 'address' => '123 Main St, Cityville', 'owner' => 'John Smith', 'type' => 'Deed Transfer', 'updated' => '2023-04-10'],
        ['id' => 'LR-2023-0538', 'address' => '456 Oak Ave, Townsburg', 'owner' => 'Jane Johnson', 'type' => 'Title Registration', 'updated' => '2023-04-09'],
        ['id' => 'LR-2023-0521', 'address' => '789 Pine Rd, Villageton', 'owner' => 'Robert Brown', 'type' => 'Survey Plan', 'updated' => '2023-04-08'],
    ];
}
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Search Land Records</h1>
      <p class="text-lg mb-8">Find property records by address, owner name, or record ID.</p>
    </div>
  </div>
</section>

<!-- Search Section -->
<section class="section bg-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto mb-12">
      <form action="search-records.php" method="GET" class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex flex-col md:flex-row gap-4 mb-4">
          <div class="flex-1">
            <label for="search_query" class="block text-sm font-medium text-gray-700 mb-1">Search Term</label>
            <input type="text" id="search_query" name="q" value="<?php echo htmlspecialchars($search_query); ?>" placeholder="Enter address, owner name, or record ID" class="input w-full">
          </div>
          <div class="w-full md:w-1/3">
            <label for="search_type" class="block text-sm font-medium text-gray-700 mb-1">Search By</label>
            <select id="search_type" name="type" class="input w-full">
              <option value="address" <?php echo $search_type == 'address' ? 'selected' : ''; ?>>Address</option>
              <option value="owner" <?php echo $search_type == 'owner' ? 'selected' : ''; ?>>Owner Name</option>
              <option value="record_id" <?php echo $search_type == 'record_id' ? 'selected' : ''; ?>>Record ID</option>
            </select>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-1">
            <label for="record_type" class="block text-sm font-medium text-gray-700 mb-1">Record Type</label>
            <select id="record_type" name="record_type" class="input w-full">
              <option value="">All Types</option>
              <option value="title">Land Titles</option>
              <option value="deed">Property Deeds</option>
              <option value="survey">Survey Plans</option>
              <option value="tax">Tax Records</option>
            </select>
          </div>
          <div class="w-full md:w-1/3 md:self-end">
            <button type="submit" class="btn btn-primary w-full">
              <i class="fa-solid fa-search mr-2"></i>Search Records
            </button>
          </div>
        </div>
      </form>
    </div>
    
    <?php if (!empty($search_query)): ?>
      <!-- Search Results -->
      <div class="animate-fadeIn">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-xl font-semibold">Search Results</h2>
          <p class="text-gray-500 text-sm"><?php echo count($search_results); ?> results found</p>
        </div>
        
        <?php if (count($search_results) > 0): ?>
          <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-8">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record ID</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property Address</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Owner</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($search_results as $result): ?>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $result['id']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $result['address']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $result['owner']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $result['type']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="#" class="text-primary hover:underline mr-4">View</a>
                    <a href="#" class="text-primary hover:underline">Download</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <div class="text-center py-12 bg-gray-50 border border-gray-200 rounded-lg">
            <i class="fa-solid fa-search text-3xl text-gray-400 mb-4"></i>
            <h3 class="text-lg font-medium mb-2">No records found</h3>
            <p class="text-gray-500">Try adjusting your search criteria or contact support for assistance.</p>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    
    <!-- Search Tips -->
    <div class="mt-8 bg-blue-50 border border-blue-100 rounded-lg p-6">
      <h3 class="text-lg font-medium mb-4 text-blue-800">Search Tips</h3>
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <ul class="list-disc list-inside text-blue-700 space-y-2">
            <li>Use the full property address for best results</li>
            <li>Owner names should be entered as "Last name, First name"</li>
            <li>Record IDs follow the format LR-YYYY-XXXX</li>
          </ul>
        </div>
        <div>
          <ul class="list-disc list-inside text-blue-700 space-y-2">
            <li>Narrow results by selecting a specific record type</li>
            <li>Recent records (last 30 days) are updated daily</li>
            <li>Historical records may have limited search functionality</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Advanced Search Options -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Advanced Search Options</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="feature-card">
        <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-map-location-dot text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Parcel Search</h3>
        <p class="text-gray-600 mb-4">Search by parcel number, lot, or subdivision information.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          Start Parcel Search <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-calendar-days text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Date Range Search</h3>
        <p class="text-gray-600 mb-4">Find records filed or modified within a specific date range.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          Search by Date <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-map text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Map-Based Search</h3>
        <p class="text-gray-600 mb-4">Visually search for properties on an interactive map.</p>
        <a href="#" class="text-primary hover:underline flex items-center">
          Open Map Search <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Need Help Section -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Need Help With Your Search?</h2>
      <p class="text-lg mb-8 text-white/90">Our team can assist with complex searches or locating historical records.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="contact.php" class="btn bg-white text-gov-700 hover:bg-gray-100">Contact Support</a>
        <a href="help-center.php" class="btn bg-white/20 text-white hover:bg-white/30">View Search Guide</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
