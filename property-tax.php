
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
      <h1 class="gradient-heading mb-4">Property Tax Management</h1>
      <p class="text-lg mb-8">Access and manage your property tax information, make payments, and view your payment history.</p>
      <div class="flex justify-center gap-4">
        <a href="pay-tax.php" class="btn btn-primary">
          <i class="fa-solid fa-credit-card mr-2"></i>Pay Taxes
        </a>
        <a href="tax-calculator.php" class="btn btn-outline">
          <i class="fa-solid fa-calculator mr-2"></i>Tax Calculator
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Tax Services -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
      <div class="feature-card">
        <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-search text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Property Search</h3>
        <p class="text-gray-600 mb-4">Look up property tax information using an address or parcel number.</p>
        <a href="#property-search" class="text-primary hover:underline flex items-center">
          Search Now <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-credit-card text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Pay Taxes</h3>
        <p class="text-gray-600 mb-4">Make secure online payments for your property taxes.</p>
        <a href="pay-tax.php" class="text-primary hover:underline flex items-center">
          Make Payment <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-calculator text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Tax Calculator</h3>
        <p class="text-gray-600 mb-4">Estimate your property tax payments with our calculator tool.</p>
        <a href="tax-calculator.php" class="text-primary hover:underline flex items-center">
          Calculate <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-blue-600 bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-file-invoice text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Tax Forms</h3>
        <p class="text-gray-600 mb-4">Download essential property tax forms and applications.</p>
        <a href="tax-forms.php" class="text-primary hover:underline flex items-center">
          View Forms <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
    
    <!-- Property Search -->
    <div id="property-search" class="mb-16 scroll-mt-24">
      <h2 class="text-2xl font-semibold mb-6">Property Tax Search</h2>
      
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm">
        <form action="#" method="GET">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <h3 class="font-semibold mb-4">Search By Address</h3>
              <div class="space-y-4">
                <div>
                  <label for="street" class="block text-sm font-medium text-gray-700 mb-1">Street Address</label>
                  <input type="text" id="street" name="street" class="input w-full" placeholder="123 Main St">
                </div>
                <div class="grid grid-cols-2 gap-3">
                  <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input type="text" id="city" name="city" class="input w-full" placeholder="Cityville">
                  </div>
                  <div>
                    <label for="zip" class="block text-sm font-medium text-gray-700 mb-1">ZIP Code</label>
                    <input type="text" id="zip" name="zip" class="input w-full" placeholder="12345">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">
                  <i class="fa-solid fa-search mr-2"></i>Search by Address
                </button>
              </div>
            </div>
            
            <div class="border-t md:border-t-0 md:border-l border-gray-200 pt-6 md:pt-0 md:pl-6">
              <h3 class="font-semibold mb-4">Search By Parcel ID</h3>
              <div class="space-y-4">
                <div>
                  <label for="parcel" class="block text-sm font-medium text-gray-700 mb-1">Parcel Identification Number</label>
                  <input type="text" id="parcel" name="parcel" class="input w-full" placeholder="123-456-789">
                  <p class="text-xs text-gray-500 mt-1">Format: XXX-XXX-XXX (Found on your property tax bill)</p>
                </div>
                <button type="submit" class="btn btn-primary mt-8">
                  <i class="fa-solid fa-search mr-2"></i>Search by Parcel ID
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!-- Important Dates -->
    <div class="mb-16">
      <h2 class="text-2xl font-semibold mb-6">Important Tax Dates</h2>
      
      <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">January 1</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Assessment Date</td>
              <td class="px-6 py-4 text-sm text-gray-500">Official date of property valuation for tax year</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">February 15</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Assessment Notices</td>
              <td class="px-6 py-4 text-sm text-gray-500">Property assessment notices mailed to owners</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">April 1</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Appeal Deadline</td>
              <td class="px-6 py-4 text-sm text-gray-500">Last day to appeal property assessment</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">July 31</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">First Payment Due</td>
              <td class="px-6 py-4 text-sm text-gray-500">First installment payment deadline</td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">December 31</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Second Payment Due</td>
              <td class="px-6 py-4 text-sm text-gray-500">Second installment payment deadline</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- How Property Taxes Work -->
    <div>
      <h2 class="text-2xl font-semibold mb-6">How Property Taxes Work</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
          <div class="text-center mb-4">
            <div class="w-12 h-12 bg-gov-100 rounded-full flex items-center justify-center mx-auto">
              <i class="fa-solid fa-home text-gov-600"></i>
            </div>
            <h3 class="font-semibold mt-3">Assessment</h3>
          </div>
          <p class="text-gray-600">Your property is assessed to determine its market value. This assessment is typically done by local government assessors.</p>
        </div>
        
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
          <div class="text-center mb-4">
            <div class="w-12 h-12 bg-earth-100 rounded-full flex items-center justify-center mx-auto">
              <i class="fa-solid fa-percentage text-earth-600"></i>
            </div>
            <h3 class="font-semibold mt-3">Tax Rate</h3>
          </div>
          <p class="text-gray-600">Local governments set tax rates (mill rates) based on budget needs. These rates determine how much tax is due for each dollar of assessed value.</p>
        </div>
        
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
          <div class="text-center mb-4">
            <div class="w-12 h-12 bg-gold-100 rounded-full flex items-center justify-center mx-auto">
              <i class="fa-solid fa-file-invoice-dollar text-gold-700"></i>
            </div>
            <h3 class="font-semibold mt-3">Calculation</h3>
          </div>
          <p class="text-gray-600">Your property tax is calculated by multiplying your property's assessed value by the tax rate, factoring in any exemptions or credits.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Common Questions -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Common Questions</h2>
    
    <div class="max-w-3xl mx-auto">
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How can I contest my property valuation?</h3>
          <p class="text-gray-600">You can appeal your property assessment by submitting a formal appeal form within 60 days of receiving your assessment notice. Supporting documentation like recent appraisals or sales of comparable properties in your area can help your case.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">What happens if I miss a payment deadline?</h3>
          <p class="text-gray-600">If you miss a payment deadline, interest begins accruing on the unpaid amount. After a specific period (typically 90 days), a late payment penalty will also be applied. Contact the tax office immediately if you anticipate payment difficulties.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">Are there any property tax relief programs available?</h3>
          <p class="text-gray-600">Yes, there are several relief programs available for qualifying homeowners, including senior citizen exemptions, veteran benefits, homestead exemptions, and hardship programs. Visit our Tax Forms page for application details.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How do I update my mailing address for tax bills?</h3>
          <p class="text-gray-600">You can update your mailing address by completing the Change of Address form online or in person at the Tax Assessor's Office. Please ensure you update your address at least 30 days before tax bills are mailed.</p>
        </div>
      </div>
      
      <div class="text-center mt-8">
        <a href="faqs.php" class="btn btn-outline">
          <i class="fa-solid fa-circle-question mr-2"></i>View All FAQs
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Tax Resources -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <h2 class="text-3xl font-bold mb-12 text-center">Tax Resources</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <a href="tax-forms.php" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-file-lines text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Tax Forms</h3>
          <p class="text-sm text-white/70">Download property tax forms and applications</p>
        </div>
      </a>
      
      <a href="payment-history.php" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-clock-rotate-left text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Payment History</h3>
          <p class="text-sm text-white/70">View your past tax payments and receipts</p>
        </div>
      </a>
      
      <a href="#" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-hand-holding-dollar text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Exemptions</h3>
          <p class="text-sm text-white/70">Learn about available tax exemptions</p>
        </div>
      </a>
      
      <a href="#" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-landmark text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Tax Laws</h3>
          <p class="text-sm text-white/70">Review relevant property tax legislation</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
