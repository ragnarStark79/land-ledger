
<?php
// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';

// Define the time periods for filtering
$period = isset($_GET['period']) ? $_GET['period'] : 'week';
$record_type = isset($_GET['type']) ? $_GET['type'] : 'all';

// In a real application, you'd fetch this data from the database
// For demo purposes, we'll use static arrays
$recentRecords = [
    ['id' => 'LR-2023-0542', 'address' => '123 Main St, Cityville', 'type' => 'Deed Transfer', 'updated' => '2023-04-10', 'details' => 'Transfer of ownership from Smith to Johnson'],
    ['id' => 'LR-2023-0538', 'address' => '456 Oak Ave, Townsburg', 'type' => 'Title Registration', 'updated' => '2023-04-09', 'details' => 'Initial registration of new construction'],
    ['id' => 'LR-2023-0521', 'address' => '789 Pine Rd, Villageton', 'type' => 'Survey Plan', 'updated' => '2023-04-08', 'details' => 'Boundary adjustment and survey update'],
    ['id' => 'LR-2023-0498', 'address' => '101 Cedar Ln, Hamletville', 'type' => 'Deed Transfer', 'updated' => '2023-04-07', 'details' => 'Property sold at auction'],
    ['id' => 'LR-2023-0487', 'address' => '202 Maple St, Boroughtown', 'type' => 'Tax Assessment', 'updated' => '2023-04-06', 'details' => 'Annual property value reassessment'],
    ['id' => 'LR-2023-0481', 'address' => '303 Elm Blvd, Districtville', 'type' => 'Title Registration', 'updated' => '2023-04-05', 'details' => 'Transfer due to inheritance'],
    ['id' => 'LR-2023-0452', 'address' => '404 Birch Dr, Countyville', 'type' => 'Survey Plan', 'updated' => '2023-04-04', 'details' => 'Land subdivision for development'],
    ['id' => 'LR-2023-0447', 'address' => '505 Aspen Way, Stateston', 'type' => 'Deed Transfer', 'updated' => '2023-04-03', 'details' => 'Corporate acquisition of property'],
];
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Recent Record Updates</h1>
      <p class="text-lg mb-8">Stay informed about the latest changes to property records in our database.</p>
    </div>
  </div>
</section>

<!-- Filter Section -->
<section class="bg-white py-8 border-b border-gray-200">
  <div class="container-custom">
    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
      <div>
        <h2 class="text-xl font-semibold">Recent Updates</h2>
        <p class="text-gray-500">Showing the latest record changes based on your filters</p>
      </div>
      
      <div class="flex flex-wrap gap-3">
        <div>
          <label for="period" class="block text-sm font-medium text-gray-700 mb-1">Time Period</label>
          <select id="period" name="period" class="input w-full" onchange="window.location.href='?period='+this.value+'&type=<?php echo $record_type; ?>'">
            <option value="day" <?php echo $period == 'day' ? 'selected' : ''; ?>>Last 24 Hours</option>
            <option value="week" <?php echo $period == 'week' ? 'selected' : ''; ?>>Last 7 Days</option>
            <option value="month" <?php echo $period == 'month' ? 'selected' : ''; ?>>Last 30 Days</option>
          </select>
        </div>
        
        <div>
          <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Record Type</label>
          <select id="type" name="type" class="input w-full" onchange="window.location.href='?period=<?php echo $period; ?>&type='+this.value">
            <option value="all" <?php echo $record_type == 'all' ? 'selected' : ''; ?>>All Types</option>
            <option value="deed" <?php echo $record_type == 'deed' ? 'selected' : ''; ?>>Deed Transfers</option>
            <option value="title" <?php echo $record_type == 'title' ? 'selected' : ''; ?>>Title Registrations</option>
            <option value="survey" <?php echo $record_type == 'survey' ? 'selected' : ''; ?>>Survey Plans</option>
            <option value="tax" <?php echo $record_type == 'tax' ? 'selected' : ''; ?>>Tax Assessments</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Records List -->
<section class="section bg-white">
  <div class="container-custom">
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-8">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property Address</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Updated</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($recentRecords as $index => $record): ?>
          <tr class="animate-fadeIn" style="animation-delay: <?php echo $index * 0.1; ?>s">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $record['id']; ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $record['address']; ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <?php if ($record['type'] == 'Deed Transfer'): ?>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Deed Transfer</span>
              <?php elseif ($record['type'] == 'Title Registration'): ?>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Title Registration</span>
              <?php elseif ($record['type'] == 'Survey Plan'): ?>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-800">Survey Plan</span>
              <?php elseif ($record['type'] == 'Tax Assessment'): ?>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-purple-100 text-purple-800">Tax Assessment</span>
              <?php else: ?>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800"><?php echo $record['type']; ?></span>
              <?php endif; ?>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $record['updated']; ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <button class="text-primary hover:underline mr-3" onclick="showRecordDetails('<?php echo $record['id']; ?>', '<?php echo addslashes($record['address']); ?>', '<?php echo $record['type']; ?>', '<?php echo $record['updated']; ?>', '<?php echo addslashes($record['details']); ?>')">
                <i class="fa-solid fa-eye mr-1"></i> View
              </button>
              <a href="#" class="text-primary hover:underline">
                <i class="fa-solid fa-download mr-1"></i> Download
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    <!-- Pagination -->
    <div class="flex items-center justify-between">
      <div class="text-sm text-gray-500">
        Showing <span class="font-medium">1</span> to <span class="font-medium">8</span> of <span class="font-medium">42</span> results
      </div>
      
      <div class="flex gap-2">
        <a href="#" class="btn btn-outline py-2 px-4 disabled:opacity-50" disabled>
          <i class="fa-solid fa-chevron-left mr-2"></i> Previous
        </a>
        <a href="#" class="btn btn-outline py-2 px-4">
          Next <i class="fa-solid fa-chevron-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Subscribe Section -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-2xl font-semibold mb-6">Stay Updated</h2>
      <p class="text-gray-600 mb-8">Subscribe to receive notifications about new record updates in your area of interest.</p>
      
      <form class="max-w-md mx-auto">
        <div class="flex flex-col sm:flex-row gap-3">
          <input type="email" class="input flex-1" placeholder="Enter your email address">
          <button type="submit" class="btn btn-primary whitespace-nowrap">
            <i class="fa-solid fa-bell mr-2"></i>Subscribe
          </button>
        </div>
        <p class="text-xs text-gray-500 mt-3">You can unsubscribe at any time. View our <a href="#" class="underline">Privacy Policy</a>.</p>
      </form>
    </div>
  </div>
</section>

<!-- Record Details Modal -->
<div id="recordDetailsModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
  <div class="bg-white rounded-xl max-w-2xl w-full max-h-screen overflow-y-auto p-6 mx-4">
    <div class="flex justify-between items-start mb-4">
      <h3 class="text-xl font-semibold" id="modalRecordId"></h3>
      <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
        <i class="fa-solid fa-times text-xl"></i>
      </button>
    </div>
    
    <div class="space-y-4">
      <div>
        <h4 class="text-sm font-medium text-gray-500">Property Address</h4>
        <p class="text-lg" id="modalAddress"></p>
      </div>
      
      <div>
        <h4 class="text-sm font-medium text-gray-500">Record Type</h4>
        <p class="text-lg" id="modalType"></p>
      </div>
      
      <div>
        <h4 class="text-sm font-medium text-gray-500">Update Date</h4>
        <p class="text-lg" id="modalDate"></p>
      </div>
      
      <div>
        <h4 class="text-sm font-medium text-gray-500">Update Details</h4>
        <p class="text-lg" id="modalDetails"></p>
      </div>
      
      <div class="pt-4 border-t border-gray-200">
        <div class="flex flex-wrap gap-3">
          <a href="#" class="btn btn-primary">
            <i class="fa-solid fa-download mr-2"></i>Download Record
          </a>
          <a href="#" class="btn btn-outline">
            <i class="fa-solid fa-print mr-2"></i>Print Record
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function showRecordDetails(id, address, type, date, details) {
    document.getElementById('modalRecordId').textContent = id;
    document.getElementById('modalAddress').textContent = address;
    document.getElementById('modalType').textContent = type;
    document.getElementById('modalDate').textContent = date;
    document.getElementById('modalDetails').textContent = details;
    document.getElementById('recordDetailsModal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
  
  function closeModal() {
    document.getElementById('recordDetailsModal').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
</script>

<?php include 'includes/footer.php'; ?>
