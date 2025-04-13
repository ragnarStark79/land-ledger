
<?php
// Include header
include 'includes/header.php';

// Initialize variables
$assessed_value = '';
$tax_rate = '';
$exemptions = '';
$calculated_tax = null;
$monthly_payment = null;

// Process form if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $assessed_value = isset($_POST['assessed_value']) ? floatval($_POST['assessed_value']) : 0;
    $tax_rate = isset($_POST['tax_rate']) ? floatval($_POST['tax_rate']) : 0;
    $exemptions = isset($_POST['exemptions']) ? floatval($_POST['exemptions']) : 0;
    
    // Calculate the property tax
    $taxable_value = max(0, $assessed_value - $exemptions);
    $calculated_tax = $taxable_value * ($tax_rate / 100);
    $monthly_payment = $calculated_tax / 12;
}
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Property Tax Calculator</h1>
      <p class="text-lg mb-8">Estimate your property tax payments with our easy-to-use calculator.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <div class="max-w-4xl mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Calculator Form -->
        <div class="md:col-span-2">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="bg-gov-100 p-4 border-b border-gray-200">
              <h2 class="text-xl font-semibold text-gov-700">Tax Calculator</h2>
            </div>
            
            <div class="p-6">
              <form action="tax-calculator.php" method="POST">
                <div class="space-y-6">
                  <div>
                    <label for="assessed_value" class="block text-sm font-medium text-gray-700 mb-1">Property Assessed Value ($)</label>
                    <input type="number" id="assessed_value" name="assessed_value" class="input w-full" min="0" step="1000" value="<?php echo htmlspecialchars($assessed_value); ?>" required>
                    <p class="text-xs text-gray-500 mt-1">The assessed value of your property as determined by the tax assessor</p>
                  </div>
                  
                  <div>
                    <label for="tax_rate" class="block text-sm font-medium text-gray-700 mb-1">Tax Rate (%)</label>
                    <input type="number" id="tax_rate" name="tax_rate" class="input w-full" min="0" step="0.001" max="10" value="<?php echo htmlspecialchars($tax_rate); ?>" required>
                    <p class="text-xs text-gray-500 mt-1">The tax rate for your area (e.g., 1.5 for 1.5%)</p>
                  </div>
                  
                  <div>
                    <label for="exemptions" class="block text-sm font-medium text-gray-700 mb-1">Exemptions ($)</label>
                    <input type="number" id="exemptions" name="exemptions" class="input w-full" min="0" step="1000" value="<?php echo htmlspecialchars($exemptions); ?>">
                    <p class="text-xs text-gray-500 mt-1">Any applicable exemptions (e.g., homestead, senior, veteran)</p>
                  </div>
                  
                  <button type="submit" class="btn btn-primary w-full">
                    <i class="fa-solid fa-calculator mr-2"></i>Calculate Tax
                  </button>
                </div>
              </form>
              
              <?php if ($calculated_tax !== null): ?>
                <!-- Results -->
                <div class="mt-8 pt-8 border-t border-gray-200">
                  <h3 class="text-lg font-semibold mb-4">Calculation Results</h3>
                  
                  <div class="space-y-4">
                    <div class="flex justify-between">
                      <span class="text-gray-600">Assessed Value:</span>
                      <span class="font-medium">$<?php echo number_format($assessed_value, 2); ?></span>
                    </div>
                    
                    <div class="flex justify-between">
                      <span class="text-gray-600">Exemptions:</span>
                      <span class="font-medium">$<?php echo number_format($exemptions, 2); ?></span>
                    </div>
                    
                    <div class="flex justify-between">
                      <span class="text-gray-600">Taxable Value:</span>
                      <span class="font-medium">$<?php echo number_format(max(0, $assessed_value - $exemptions), 2); ?></span>
                    </div>
                    
                    <div class="flex justify-between">
                      <span class="text-gray-600">Tax Rate:</span>
                      <span class="font-medium"><?php echo number_format($tax_rate, 3); ?>%</span>
                    </div>
                    
                    <div class="flex justify-between pt-4 border-t border-gray-200">
                      <span class="text-lg font-semibold">Annual Property Tax:</span>
                      <span class="text-lg font-semibold text-primary">$<?php echo number_format($calculated_tax, 2); ?></span>
                    </div>
                    
                    <div class="flex justify-between">
                      <span class="text-gray-600">Monthly Payment (approx.):</span>
                      <span class="font-medium">$<?php echo number_format($monthly_payment, 2); ?></span>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        
        <!-- Information Sidebar -->
        <div>
          <!-- Average Tax Rates -->
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden mb-6">
            <div class="bg-earth-100 p-4 border-b border-gray-200">
              <h3 class="font-semibold text-earth-700">Average Tax Rates</h3>
            </div>
            
            <div class="p-4">
              <ul class="space-y-2">
                <li class="flex justify-between">
                  <span>Cityville:</span>
                  <span class="font-medium">1.45%</span>
                </li>
                <li class="flex justify-between">
                  <span>Townsburg:</span>
                  <span class="font-medium">1.65%</span>
                </li>
                <li class="flex justify-between">
                  <span>Villageton:</span>
                  <span class="font-medium">1.38%</span>
                </li>
                <li class="flex justify-between">
                  <span>Hamletville:</span>
                  <span class="font-medium">1.52%</span>
                </li>
                <li class="flex justify-between">
                  <span>Countyville:</span>
                  <span class="font-medium">1.71%</span>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- Common Exemptions -->
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden mb-6">
            <div class="bg-gold-100 p-4 border-b border-gray-200">
              <h3 class="font-semibold text-gold-700">Common Exemptions</h3>
            </div>
            
            <div class="p-4">
              <ul class="space-y-2">
                <li class="flex justify-between">
                  <span>Homestead:</span>
                  <span class="font-medium">$25,000</span>
                </li>
                <li class="flex justify-between">
                  <span>Senior Citizen:</span>
                  <span class="font-medium">$15,000</span>
                </li>
                <li class="flex justify-between">
                  <span>Veterans:</span>
                  <span class="font-medium">$10,000</span>
                </li>
                <li class="flex justify-between">
                  <span>Disability:</span>
                  <span class="font-medium">$50,000</span>
                </li>
              </ul>
              <div class="mt-4 pt-4 border-t border-gray-200">
                <a href="tax-forms.php" class="text-primary hover:underline text-sm flex items-center">
                  <i class="fa-solid fa-file-lines mr-1"></i> Exemption Application Forms
                </a>
              </div>
            </div>
          </div>
          
          <!-- Help Box -->
          <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
            <h3 class="font-semibold text-blue-800 mb-2">Need Help?</h3>
            <p class="text-sm text-blue-700 mb-4">Our tax specialists can help you understand your property tax calculations and applicable exemptions.</p>
            <a href="contact.php" class="btn btn-outline w-full bg-white text-blue-700 border-blue-200 hover:bg-blue-100">
              <i class="fa-solid fa-headset mr-2"></i>Contact Support
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Frequently Asked Questions</h2>
    
    <div class="max-w-3xl mx-auto">
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How is property tax calculated?</h3>
          <p class="text-gray-600">Property tax is calculated by multiplying the assessed value of your property (minus any applicable exemptions) by the tax rate established by local taxing authorities. The formula is: (Assessed Value - Exemptions) × Tax Rate = Property Tax.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How often is my property assessed?</h3>
          <p class="text-gray-600">Most jurisdictions reassess property values every 1-3 years. However, this can vary by location. Property values are typically assessed as of January 1 of each year.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">How can I reduce my property taxes?</h3>
          <p class="text-gray-600">You may be able to reduce your property taxes by applying for exemptions, appealing your assessment if you believe it's too high, or participating in tax deferral programs if you qualify. Contact your local tax assessor's office for specific options in your area.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm">
          <h3 class="text-lg font-medium mb-2">Is this calculator's result my exact tax amount?</h3>
          <p class="text-gray-600">This calculator provides an estimate based on the information you provide. Your actual tax bill may differ due to additional local levies, special assessments, or other factors. Always refer to your official tax bill for the exact amount due.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Related Resources -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <h2 class="text-3xl font-bold mb-12 text-center">Related Resources</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <a href="pay-tax.php" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-credit-card text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Pay Property Taxes</h3>
          <p class="text-sm text-white/70">Make secure online payments for your property taxes</p>
        </div>
      </a>
      
      <a href="property-tax.php" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-magnifying-glass text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Property Search</h3>
          <p class="text-sm text-white/70">Find information about properties and their tax status</p>
        </div>
      </a>
      
      <a href="tax-forms.php" class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover:bg-white/20 transition-all">
        <div class="text-center">
          <i class="fa-solid fa-file-lines text-3xl mb-4"></i>
          <h3 class="font-semibold mb-2">Tax Forms</h3>
          <p class="text-sm text-white/70">Access forms for exemptions and tax-related applications</p>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
