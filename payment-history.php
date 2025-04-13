
<?php
// Start session
session_start();

// Check if user is logged in
$is_logged_in = isset($_SESSION['user_id']);

// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';

// Sample payment history data - in a real application, this would come from the database
$payment_history = [
    [
        'payment_id' => 'PMT-2023-0015',
        'date' => '2023-04-05',
        'amount' => 3750.00,
        'method' => 'Credit Card',
        'status' => 'Processed',
        'property' => '123 Main St, Cityville'
    ],
    [
        'payment_id' => 'PMT-2022-0246',
        'date' => '2022-12-10',
        'amount' => 3750.00,
        'method' => 'Bank Transfer',
        'status' => 'Processed',
        'property' => '123 Main St, Cityville'
    ],
    [
        'payment_id' => 'PMT-2022-0108',
        'date' => '2022-07-20',
        'amount' => 3500.00,
        'method' => 'Credit Card',
        'status' => 'Processed',
        'property' => '123 Main St, Cityville'
    ],
    [
        'payment_id' => 'PMT-2021-0357',
        'date' => '2021-12-15',
        'amount' => 3500.00,
        'method' => 'Check',
        'status' => 'Processed',
        'property' => '123 Main St, Cityville'
    ],
    [
        'payment_id' => 'PMT-2021-0185',
        'date' => '2021-07-25',
        'amount' => 3250.00,
        'method' => 'Bank Transfer',
        'status' => 'Processed',
        'property' => '123 Main St, Cityville'
    ],
];
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Payment History</h1>
      <p class="text-lg mb-8">View and manage your property tax payment history.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <?php if ($is_logged_in): ?>
      <!-- Logged In View -->
      <div class="max-w-5xl mx-auto">
        <!-- Filter Controls -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-6 flex flex-col md:flex-row gap-4 items-center justify-between">
          <div>
            <h2 class="text-lg font-semibold">Payment Records</h2>
            <p class="text-gray-500 text-sm">View and export your payment history</p>
          </div>
          <div class="flex flex-wrap gap-3">
            <select class="input">
              <option value="all">All Properties</option>
              <option value="123-main">123 Main St, Cityville</option>
              <option value="456-oak">456 Oak Ave, Townsburg</option>
            </select>
            <select class="input">
              <option value="all">All Time</option>
              <option value="2023">2023</option>
              <option value="2022">2022</option>
              <option value="2021">2021</option>
            </select>
            <button class="btn btn-outline">
              <i class="fa-solid fa-filter mr-2"></i>Apply Filters
            </button>
          </div>
        </div>
        
        <!-- Payment History Table -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-8">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reference</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Method</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach ($payment_history as $payment): ?>
                <tr class="animate-fadeIn">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900"><?php echo $payment['payment_id']; ?></div>
                    <div class="text-xs text-gray-500"><?php echo $payment['property']; ?></div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $payment['date']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$<?php echo number_format($payment['amount'], 2); ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $payment['method']; ?></td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <?php if ($payment['status'] == 'Processed'): ?>
                      <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                        <?php echo $payment['status']; ?>
                      </span>
                    <?php elseif ($payment['status'] == 'Pending'): ?>
                      <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                        <?php echo $payment['status']; ?>
                      </span>
                    <?php elseif ($payment['status'] == 'Failed'): ?>
                      <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                        <?php echo $payment['status']; ?>
                      </span>
                    <?php endif; ?>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button class="text-primary hover:underline" onclick="viewReceipt('<?php echo $payment['payment_id']; ?>')">
                      <i class="fa-solid fa-receipt mr-1"></i> View Receipt
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        
        <!-- Export Options -->
        <div class="flex justify-end gap-3 mb-12">
          <button class="btn btn-outline">
            <i class="fa-solid fa-print mr-2"></i>Print
          </button>
          <button class="btn btn-outline">
            <i class="fa-solid fa-file-pdf mr-2"></i>Export PDF
          </button>
          <button class="btn btn-outline">
            <i class="fa-solid fa-file-csv mr-2"></i>Export CSV
          </button>
        </div>
        
        <!-- Annual Summary -->
        <h2 class="text-2xl font-semibold mb-6">Annual Payment Summary</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
          <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="text-center">
              <h3 class="font-semibold mb-3">2023</h3>
              <div class="text-2xl font-bold text-gov-700">$3,750.00</div>
              <p class="text-sm text-gray-500 mt-2">1 payment(s)</p>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="text-center">
              <h3 class="font-semibold mb-3">2022</h3>
              <div class="text-2xl font-bold text-gov-700">$7,250.00</div>
              <p class="text-sm text-gray-500 mt-2">2 payment(s)</p>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="text-center">
              <h3 class="font-semibold mb-3">2021</h3>
              <div class="text-2xl font-bold text-gov-700">$6,750.00</div>
              <p class="text-sm text-gray-500 mt-2">2 payment(s)</p>
            </div>
          </div>
        </div>
        
        <!-- Payment Methods -->
        <h2 class="text-2xl font-semibold mb-6">Saved Payment Methods</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex justify-between items-center mb-4">
              <div class="flex items-center">
                <i class="fa-brands fa-cc-visa text-blue-700 text-2xl mr-3"></i>
                <div>
                  <h3 class="font-semibold">Visa ending in 4567</h3>
                  <p class="text-sm text-gray-500">Expires 05/25</p>
                </div>
              </div>
              <div>
                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Default</span>
              </div>
            </div>
            <div class="flex gap-3">
              <button class="btn btn-outline btn-sm">Edit</button>
              <button class="btn btn-outline btn-sm text-red-600 hover:bg-red-50">Remove</button>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <div class="flex justify-between items-center mb-4">
              <div class="flex items-center">
                <i class="fa-solid fa-university text-gray-700 text-2xl mr-3"></i>
                <div>
                  <h3 class="font-semibold">Bank Account ending in 9876</h3>
                  <p class="text-sm text-gray-500">First National Bank</p>
                </div>
              </div>
            </div>
            <div class="flex gap-3">
              <button class="btn btn-outline btn-sm">Edit</button>
              <button class="btn btn-outline btn-sm text-red-600 hover:bg-red-50">Remove</button>
              <button class="btn btn-outline btn-sm text-gov-700">Set as Default</button>
            </div>
          </div>
        </div>
      </div>
    <?php else: ?>
      <!-- Login Required View -->
      <div class="max-w-md mx-auto text-center">
        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
          <div class="text-earth-600 bg-earth-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fa-solid fa-lock text-2xl"></i>
          </div>
          
          <h2 class="text-2xl font-semibold mb-4">Login Required</h2>
          <p class="text-gray-600 mb-8">Please log in to view your payment history and manage your tax records.</p>
          
          <div class="flex flex-col gap-3">
            <a href="login.php" class="btn btn-primary">
              <i class="fa-solid fa-right-to-bracket mr-2"></i>Log In
            </a>
            <a href="register.php" class="btn btn-outline">
              <i class="fa-solid fa-user-plus mr-2"></i>Create Account
            </a>
          </div>
          
          <div class="mt-6 pt-6 border-t border-gray-200">
            <p class="text-sm text-gray-500">Need help accessing your account?</p>
            <a href="contact.php" class="text-primary hover:underline text-sm">Contact Support</a>
          </div>
        </div>
        
        <!-- Sample Data Demo -->
        <div class="mt-12 bg-gray-50 border border-gray-200 rounded-xl p-6">
          <h3 class="font-semibold mb-4">Sample Payment History</h3>
          <p class="text-gray-600 mb-6">Below is an example of what your payment history would look like after logging in.</p>
          
          <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reference</th>
                  <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                  <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">PMT-2023-####</td>
                  <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2023-04-05</td>
                  <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">$3,750.00</td>
                </tr>
                <tr>
                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">PMT-2022-####</td>
                  <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">2022-12-10</td>
                  <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">$3,750.00</td>
                </tr>
                <tr class="bg-gray-100">
                  <td colspan="3" class="px-4 py-2 text-center text-xs text-gray-500">Login to see more</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Receipt Modal -->
<div id="receiptModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
  <div class="bg-white rounded-xl max-w-2xl w-full p-6 mx-4">
    <div class="flex justify-between items-start mb-4">
      <h3 class="text-xl font-semibold" id="modalTitle">Payment Receipt</h3>
      <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
        <i class="fa-solid fa-times text-xl"></i>
      </button>
    </div>
    
    <div class="border-t border-b border-gray-200 py-6 mb-6">
      <div class="flex justify-between mb-6">
        <div>
          <h2 class="text-lg font-bold">Land Ledger</h2>
          <p class="text-sm text-gray-500">County Tax Collector</p>
        </div>
        <div class="text-right">
          <h3 class="text-lg font-bold text-primary">Receipt</h3>
          <p class="text-sm text-gray-500" id="receiptId">PMT-2023-0015</p>
        </div>
      </div>
      
      <div class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-xs text-gray-500">Paid By</p>
            <p>John Smith</p>
          </div>
          <div>
            <p class="text-xs text-gray-500">Property Address</p>
            <p>123 Main St, Cityville, ST 12345</p>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-xs text-gray-500">Payment Date</p>
            <p id="receiptDate">April 5, 2023</p>
          </div>
          <div>
            <p class="text-xs text-gray-500">Payment Method</p>
            <p id="receiptMethod">Credit Card ending in 4567</p>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-xs text-gray-500">Tax Year</p>
            <p>2023</p>
          </div>
          <div>
            <p class="text-xs text-gray-500">Parcel ID</p>
            <p>123-456-789</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="mb-6">
      <div class="flex justify-between mb-2">
        <span class="text-gray-600">Property Tax</span>
        <span id="receiptAmount">$3,750.00</span>
      </div>
      <div class="flex justify-between mb-2">
        <span class="text-gray-600">Processing Fee</span>
        <span>$112.50</span>
      </div>
      <div class="flex justify-between font-bold border-t border-gray-200 pt-2">
        <span>Total Paid</span>
        <span>$3,862.50</span>
      </div>
    </div>
    
    <div class="flex justify-end gap-3">
      <button class="btn btn-outline">
        <i class="fa-solid fa-print mr-2"></i>Print
      </button>
      <button class="btn btn-outline">
        <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
      </button>
      <button class="btn btn-primary" onclick="closeModal()">
        Close
      </button>
    </div>
  </div>
</div>

<!-- FAQ Section -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Frequently Asked Questions</h2>
    
    <div class="max-w-3xl mx-auto">
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How long are payment records kept?</h3>
          <p class="text-gray-600">We maintain digital payment records for at least 7 years. You can access your complete payment history through your online account.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How do I get a copy of a receipt for tax purposes?</h3>
          <p class="text-gray-600">You can download or print receipts for any payment directly from the payment history page. These receipts are valid for tax filings and record-keeping purposes.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">Why is there a processing fee on some payments?</h3>
          <p class="text-gray-600">Processing fees apply to credit card payments (3% of the payment amount) and electronic checks ($1.50 flat fee). These fees cover the cost of payment processing services.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">What should I do if a payment shows as pending for more than 3 days?</h3>
          <p class="text-gray-600">If a payment remains in "pending" status for more than 3 business days, please contact our support team with your payment reference number for assistance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function viewReceipt(paymentId) {
    document.getElementById('receiptId').textContent = paymentId;
    
    // In a real app, you would fetch the details based on paymentId
    // For demo purposes, we'll just use the first payment in our sample data
    document.getElementById('receiptDate').textContent = 'April 5, 2023';
    document.getElementById('receiptMethod').textContent = 'Credit Card ending in 4567';
    document.getElementById('receiptAmount').textContent = '$3,750.00';
    
    // Show the modal
    document.getElementById('receiptModal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }
  
  function closeModal() {
    document.getElementById('receiptModal').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
</script>

<?php include 'includes/footer.php'; ?>
