
<?php
// Include database configuration
require_once 'config/database.php';

// Initialize variables
$property_found = false;
$property_details = null;
$search_error = '';

// Process property search form
if (isset($_GET['search'])) {
    $parcel_id = isset($_GET['parcel_id']) ? trim($_GET['parcel_id']) : '';
    
    // In a real application, you would search the database
    // For this demo, we'll simulate a successful lookup with a specific ID
    if ($parcel_id === '123-456-789') {
        $property_found = true;
        $property_details = [
            'parcel_id' => '123-456-789',
            'address' => '123 Main St, Cityville, ST 12345',
            'owner' => 'John Smith',
            'assessed_value' => 250000,
            'tax_amount' => 3750.00,
            'due_date' => 'December 31, 2023',
            'status' => 'Due',
        ];
    } else {
        $search_error = 'Property not found. Please check your parcel ID and try again.';
    }
}

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Pay Property Taxes</h1>
      <p class="text-lg mb-8">Make secure online payments for your property taxes quickly and easily.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Property Search -->
    <?php if (!$property_found): ?>
      <div class="max-w-2xl mx-auto mb-16">
        <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm">
          <h2 class="text-2xl font-semibold mb-6">Find Your Property</h2>
          
          <?php if (!empty($search_error)): ?>
            <div class="bg-red-50 text-red-700 p-4 rounded-lg mb-6">
              <div class="flex">
                <div class="flex-shrink-0">
                  <i class="fa-solid fa-circle-exclamation"></i>
                </div>
                <div class="ml-3">
                  <p class="text-sm"><?php echo $search_error; ?></p>
                </div>
              </div>
            </div>
          <?php endif; ?>
          
          <form action="pay-tax.php" method="GET">
            <div class="space-y-4">
              <div>
                <label for="parcel_id" class="block text-sm font-medium text-gray-700 mb-1">Parcel ID Number</label>
                <input type="text" id="parcel_id" name="parcel_id" class="input w-full" placeholder="123-456-789">
                <p class="text-xs text-gray-500 mt-1">Enter the Parcel ID from your tax bill or assessment notice</p>
              </div>
              
              <button type="submit" name="search" value="1" class="btn btn-primary w-full">
                <i class="fa-solid fa-search mr-2"></i>Find Property
              </button>
            </div>
          </form>
          
          <div class="mt-6 pt-6 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-600 mb-3">Don't know your Parcel ID?</p>
            <a href="property-tax.php#property-search" class="btn btn-outline w-full">
              <i class="fa-solid fa-home mr-2"></i>Search by Address
            </a>
          </div>
          
          <!-- Demo Information -->
          <div class="mt-6 p-4 bg-blue-50 text-blue-700 rounded-lg">
            <p class="text-sm"><strong>Demo:</strong> Use Parcel ID "123-456-789" to see a sample property.</p>
          </div>
        </div>
      </div>
    <?php else: ?>
      <!-- Property Details & Payment Form -->
      <div class="max-w-4xl mx-auto">
        <!-- Property Information -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden mb-8">
          <div class="bg-gov-100 p-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gov-700">Property Information</h2>
          </div>
          
          <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <p class="text-sm text-gray-500 mb-1">Parcel ID</p>
                <p class="font-medium"><?php echo $property_details['parcel_id']; ?></p>
              </div>
              
              <div>
                <p class="text-sm text-gray-500 mb-1">Property Address</p>
                <p class="font-medium"><?php echo $property_details['address']; ?></p>
              </div>
              
              <div>
                <p class="text-sm text-gray-500 mb-1">Owner</p>
                <p class="font-medium"><?php echo $property_details['owner']; ?></p>
              </div>
              
              <div>
                <p class="text-sm text-gray-500 mb-1">Assessed Value</p>
                <p class="font-medium">$<?php echo number_format($property_details['assessed_value']); ?></p>
              </div>
              
              <div>
                <p class="text-sm text-gray-500 mb-1">Tax Amount</p>
                <p class="font-medium text-lg text-gov-700">$<?php echo number_format($property_details['tax_amount'], 2); ?></p>
              </div>
              
              <div>
                <p class="text-sm text-gray-500 mb-1">Due Date</p>
                <p class="font-medium"><?php echo $property_details['due_date']; ?></p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Payment Options -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden mb-8">
          <div class="bg-earth-100 p-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-earth-700">Payment Options</h2>
          </div>
          
          <div class="p-6">
            <!-- Payment Tabs -->
            <div class="mb-8">
              <div class="flex border-b border-gray-200">
                <button class="py-3 px-6 border-b-2 border-primary text-primary font-medium" id="tab-credit-card">
                  <i class="fa-solid fa-credit-card mr-2"></i>Credit Card
                </button>
                <button class="py-3 px-6 text-gray-500 hover:text-gray-700" id="tab-bank-account">
                  <i class="fa-solid fa-landmark mr-2"></i>Bank Account
                </button>
                <button class="py-3 px-6 text-gray-500 hover:text-gray-700" id="tab-wire-transfer">
                  <i class="fa-solid fa-money-bill-transfer mr-2"></i>Wire Transfer
                </button>
              </div>
            </div>
            
            <!-- Credit Card Form -->
            <div id="form-credit-card" class="animate-fadeIn">
              <form action="#" method="POST">
                <div class="space-y-6">
                  <div>
                    <label for="cc_name" class="block text-sm font-medium text-gray-700 mb-1">Name on Card</label>
                    <input type="text" id="cc_name" name="cc_name" class="input w-full" placeholder="John Smith">
                  </div>
                  
                  <div>
                    <label for="cc_number" class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                    <div class="relative">
                      <input type="text" id="cc_number" name="cc_number" class="input w-full pl-12" placeholder="1234 5678 9012 3456">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fa-brands fa-cc-visa text-gray-400"></i>
                      </div>
                    </div>
                  </div>
                  
                  <div class="grid grid-cols-2 gap-6">
                    <div>
                      <label for="cc_expiry" class="block text-sm font-medium text-gray-700 mb-1">Expiration Date</label>
                      <input type="text" id="cc_expiry" name="cc_expiry" class="input w-full" placeholder="MM/YY">
                    </div>
                    <div>
                      <label for="cc_cvc" class="block text-sm font-medium text-gray-700 mb-1">CVC</label>
                      <input type="text" id="cc_cvc" name="cc_cvc" class="input w-full" placeholder="123">
                    </div>
                  </div>
                  
                  <div class="flex items-center justify-between">
                    <div>
                      <p class="text-sm text-gray-500">Processing Fee: <span class="font-medium">$<?php echo number_format($property_details['tax_amount'] * 0.03, 2); ?></span></p>
                    </div>
                    <div>
                      <p class="text-lg font-semibold">Total: <span class="text-primary">$<?php echo number_format($property_details['tax_amount'] * 1.03, 2); ?></span></p>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary w-full">
                    <i class="fa-solid fa-lock mr-2"></i>Pay $<?php echo number_format($property_details['tax_amount'] * 1.03, 2); ?>
                  </button>
                </div>
              </form>
            </div>
            
            <!-- Other payment forms would be hidden initially -->
            <div id="form-bank-account" class="hidden animate-fadeIn">
              <!-- Bank Account Form Fields -->
              <form action="#" method="POST">
                <div class="space-y-6">
                  <div>
                    <label for="bank_name" class="block text-sm font-medium text-gray-700 mb-1">Bank Name</label>
                    <input type="text" id="bank_name" name="bank_name" class="input w-full">
                  </div>
                  
                  <div>
                    <label for="routing_number" class="block text-sm font-medium text-gray-700 mb-1">Routing Number</label>
                    <input type="text" id="routing_number" name="routing_number" class="input w-full">
                  </div>
                  
                  <div>
                    <label for="account_number" class="block text-sm font-medium text-gray-700 mb-1">Account Number</label>
                    <input type="text" id="account_number" name="account_number" class="input w-full">
                  </div>
                  
                  <div>
                    <label for="account_type" class="block text-sm font-medium text-gray-700 mb-1">Account Type</label>
                    <select id="account_type" name="account_type" class="input w-full">
                      <option value="checking">Checking</option>
                      <option value="savings">Savings</option>
                    </select>
                  </div>
                  
                  <div class="flex items-center justify-between">
                    <div>
                      <p class="text-sm text-gray-500">Processing Fee: <span class="font-medium">$1.50</span></p>
                    </div>
                    <div>
                      <p class="text-lg font-semibold">Total: <span class="text-primary">$<?php echo number_format($property_details['tax_amount'] + 1.50, 2); ?></span></p>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary w-full">
                    <i class="fa-solid fa-lock mr-2"></i>Pay $<?php echo number_format($property_details['tax_amount'] + 1.50, 2); ?>
                  </button>
                </div>
              </form>
            </div>
            
            <div id="form-wire-transfer" class="hidden animate-fadeIn">
              <!-- Wire Transfer Instructions -->
              <div class="space-y-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                  <h3 class="font-semibold mb-2">Wire Transfer Instructions</h3>
                  <ul class="space-y-2 text-sm">
                    <li><strong>Bank Name:</strong> First National Bank</li>
                    <li><strong>Account Name:</strong> County Tax Collector</li>
                    <li><strong>Account Number:</strong> 1234567890</li>
                    <li><strong>Routing Number:</strong> 987654321</li>
                    <li><strong>Reference:</strong> Parcel ID <?php echo $property_details['parcel_id']; ?></li>
                  </ul>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                  <div class="flex">
                    <div class="flex-shrink-0">
                      <i class="fa-solid fa-circle-info text-yellow-400"></i>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm text-yellow-700">
                        Please include your Parcel ID as a reference when making the wire transfer. Allow 3-5 business days for processing.
                      </p>
                    </div>
                  </div>
                </div>
                
                <a href="payment-history.php" class="btn btn-outline w-full">
                  <i class="fa-solid fa-clock mr-2"></i>Check Payment Status
                </a>
              </div>
            </div>
            
            <div class="mt-6 pt-6 border-t border-gray-200">
              <div class="flex items-center justify-center">
                <i class="fa-solid fa-lock text-green-500 mr-2"></i>
                <span class="text-sm text-gray-500">All payments are secure and encrypted</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Payment Options -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
          <div class="bg-gold-100 p-4 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gold-700">Other Payment Methods</h2>
          </div>
          
          <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <h3 class="font-semibold mb-3">In Person</h3>
                <p class="text-gray-600 mb-3">Pay at the County Tax Collector's Office:</p>
                <address class="text-gray-600 not-italic">
                  123 Government Way<br>
                  Cityville, ST 12345<br>
                  Monday-Friday, 8am-5pm
                </address>
              </div>
              
              <div>
                <h3 class="font-semibold mb-3">By Mail</h3>
                <p class="text-gray-600 mb-3">Send check or money order to:</p>
                <address class="text-gray-600 not-italic">
                  County Tax Collector<br>
                  P.O. Box 12345<br>
                  Cityville, ST 12345
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Payment Information -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Payment Information</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-gov-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-credit-card text-gov-600"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">Accepted Payment Methods</h3>
        <ul class="space-y-2">
          <li class="flex items-center">
            <i class="fa-solid fa-check text-green-500 mr-2"></i>
            <span>Credit/Debit Cards (Visa, Mastercard, Amex, Discover)</span>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-check text-green-500 mr-2"></i>
            <span>Electronic Check (ACH)</span>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-check text-green-500 mr-2"></i>
            <span>Wire Transfer</span>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-check text-green-500 mr-2"></i>
            <span>Cash or Check (in person only)</span>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-check text-green-500 mr-2"></i>
            <span>Money Order</span>
          </li>
        </ul>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-earth-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-money-bill-wave text-earth-600"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">Payment Fees</h3>
        <ul class="space-y-2">
          <li class="flex items-center justify-between">
            <span>Credit/Debit Card</span>
            <span class="font-medium">3% of payment amount</span>
          </li>
          <li class="flex items-center justify-between">
            <span>Electronic Check (ACH)</span>
            <span class="font-medium">$1.50 flat fee</span>
          </li>
          <li class="flex items-center justify-between">
            <span>Wire Transfer</span>
            <span class="font-medium">Varies by bank</span>
          </li>
          <li class="flex items-center justify-between">
            <span>Cash or Check (in person)</span>
            <span class="font-medium">No fee</span>
          </li>
          <li class="flex items-center justify-between">
            <span>Money Order</span>
            <span class="font-medium">No fee</span>
          </li>
        </ul>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-gold-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-circle-question text-gold-700"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">Payment FAQ</h3>
        <div class="space-y-3">
          <div>
            <p class="font-medium">When are property taxes due?</p>
            <p class="text-gray-600 text-sm">Property taxes are due on July 31 and December 31.</p>
          </div>
          <div>
            <p class="font-medium">Can I set up automatic payments?</p>
            <p class="text-gray-600 text-sm">Yes, you can set up autopay through your online account.</p>
          </div>
          <div>
            <p class="font-medium">Are partial payments accepted?</p>
            <p class="text-gray-600 text-sm">Yes, but interest may accrue on the unpaid balance.</p>
          </div>
          <div>
            <p class="font-medium">How soon will my payment be processed?</p>
            <p class="text-gray-600 text-sm">Online payments are typically processed within 1-2 business days.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Tab switching functionality
  document.addEventListener('DOMContentLoaded', function() {
    const creditCardTab = document.getElementById('tab-credit-card');
    const bankAccountTab = document.getElementById('tab-bank-account');
    const wireTransferTab = document.getElementById('tab-wire-transfer');
    
    const creditCardForm = document.getElementById('form-credit-card');
    const bankAccountForm = document.getElementById('form-bank-account');
    const wireTransferForm = document.getElementById('form-wire-transfer');
    
    creditCardTab.addEventListener('click', function() {
      // Highlight active tab
      creditCardTab.classList.add('border-b-2', 'border-primary', 'text-primary');
      bankAccountTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      wireTransferTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      
      bankAccountTab.classList.add('text-gray-500');
      wireTransferTab.classList.add('text-gray-500');
      
      // Show active form
      creditCardForm.classList.remove('hidden');
      bankAccountForm.classList.add('hidden');
      wireTransferForm.classList.add('hidden');
    });
    
    bankAccountTab.addEventListener('click', function() {
      // Highlight active tab
      bankAccountTab.classList.add('border-b-2', 'border-primary', 'text-primary');
      creditCardTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      wireTransferTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      
      creditCardTab.classList.add('text-gray-500');
      wireTransferTab.classList.add('text-gray-500');
      
      // Show active form
      bankAccountForm.classList.remove('hidden');
      creditCardForm.classList.add('hidden');
      wireTransferForm.classList.add('hidden');
    });
    
    wireTransferTab.addEventListener('click', function() {
      // Highlight active tab
      wireTransferTab.classList.add('border-b-2', 'border-primary', 'text-primary');
      creditCardTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      bankAccountTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
      
      creditCardTab.classList.add('text-gray-500');
      bankAccountTab.classList.add('text-gray-500');
      
      // Show active form
      wireTransferForm.classList.remove('hidden');
      creditCardForm.classList.add('hidden');
      bankAccountForm.classList.add('hidden');
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
