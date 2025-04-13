
<?php
// Include database configuration
require_once 'config/database.php';

// Initialize variables
$error = '';
$success = '';

// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-earth-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4">Property Tax Management</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Calculate, view, and pay your property taxes online. Our system makes it easy to stay compliant
                    with tax regulations and manage your payments efficiently.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#calculator" class="btn btn-primary">
                        <i class="fa-solid fa-calculator mr-2"></i>
                        Calculate Tax
                    </a>
                    <a href="#payment" class="btn btn-secondary">
                        <i class="fa-solid fa-credit-card mr-2"></i>
                        Pay Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tax Information Cards -->
    <section class="py-12">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-500 mb-2">Current Tax Rate</h4>
                    <div class="flex items-baseline">
                        <span class="text-2xl font-bold">2.5</span>
                        <span class="text-gray-500 ml-1">%</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Residential properties</p>
                </div>
                
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-500 mb-2">Early Payment Discount</h4>
                    <div class="flex items-baseline">
                        <span class="text-2xl font-bold">5</span>
                        <span class="text-gray-500 ml-1">%</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Until March 31st</p>
                </div>
                
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-500 mb-2">Late Payment Fee</h4>
                    <div class="flex items-baseline">
                        <span class="text-2xl font-bold">1.2</span>
                        <span class="text-gray-500 ml-1">%</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Per month after due date</p>
                </div>
                
                <div class="bg-white rounded-xl p-5 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-500 mb-2">Next Due Date</h4>
                    <div class="flex items-baseline">
                        <span class="text-2xl font-bold">June 30</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Financial Year 2024-25</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center bg-muted p-4 rounded-lg">
                <p class="text-sm text-gray-500 mb-4 sm:mb-0">
                    <i class="fa-solid fa-circle-info mr-1 text-gov-700"></i>
                    Tax rates may vary based on property type, location, and usage
                </p>
                <a href="tax-policy.php" class="text-primary font-medium hover:underline inline-flex items-center">
                    View complete tax policy
                    <i class="fa-solid fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Calculator Section -->
    <section id="calculator" class="py-12 bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Tax Calculator
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Calculate Your Property Tax</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Estimate your property tax based on the value, location, and type of your property.
                    The calculator provides an approximate amount and is subject to verification.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <form id="tax-calculator-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="property-value" class="block text-sm font-medium mb-1">Property Value (in $)</label>
                                <input type="number" id="property-value" name="property_value" min="1000" class="input w-full" placeholder="e.g., 500000">
                            </div>
                            
                            <div>
                                <label for="property-type" class="block text-sm font-medium mb-1">Property Type</label>
                                <select id="property-type" name="property_type" class="input w-full">
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="agricultural">Agricultural</option>
                                    <option value="industrial">Industrial</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="property-age" class="block text-sm font-medium mb-1">Property Age (in years)</label>
                                <input type="number" id="property-age" name="property_age" min="0" class="input w-full" placeholder="e.g., 5">
                            </div>
                            
                            <div>
                                <label for="district" class="block text-sm font-medium mb-1">District</label>
                                <select id="district" name="district" class="input w-full">
                                    <option value="north">North District</option>
                                    <option value="south">South District</option>
                                    <option value="east">East District</option>
                                    <option value="west">West District</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="exemptions" class="block text-sm font-medium mb-1">Applicable Exemptions</label>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="senior-citizen" name="exemptions[]" value="senior_citizen" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="senior-citizen" class="ml-2 block text-sm text-gray-700">Senior Citizen</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="first-time-owner" name="exemptions[]" value="first_time_owner" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="first-time-owner" class="ml-2 block text-sm text-gray-700">First-time Homeowner</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="energy-efficient" name="exemptions[]" value="energy_efficient" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="energy-efficient" class="ml-2 block text-sm text-gray-700">Energy-efficient Property</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="historic-property" name="exemptions[]" value="historic_property" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="historic-property" class="ml-2 block text-sm text-gray-700">Historic Property</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-center">
                            <button type="button" id="calculate-btn" class="btn btn-primary px-8">Calculate Tax</button>
                        </div>
                    </form>
                    
                    <div id="tax-result" class="mt-8 hidden">
                        <div class="border-t pt-6">
                            <h3 class="text-lg font-medium mb-4">Estimated Tax Calculation</h3>
                            
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-1 border-b">
                                    <span class="text-sm">Base Property Value:</span>
                                    <span class="font-medium" id="base-value">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center py-1 border-b">
                                    <span class="text-sm">Base Tax Rate:</span>
                                    <span class="font-medium" id="base-rate">0%</span>
                                </div>
                                <div class="flex justify-between items-center py-1 border-b">
                                    <span class="text-sm">Exemptions Applied:</span>
                                    <span class="font-medium" id="exemptions-value">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center py-1 border-b">
                                    <span class="text-sm">Net Taxable Value:</span>
                                    <span class="font-medium" id="net-value">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b-2 border-gray-500">
                                    <span class="text-base font-medium">Total Annual Property Tax:</span>
                                    <span class="text-xl font-bold text-primary" id="total-tax">$0.00</span>
                                </div>
                                <div class="flex justify-between items-center py-1">
                                    <span class="text-sm">Installment Amount (Quarterly):</span>
                                    <span class="font-medium" id="quarterly-tax">$0.00</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 bg-muted p-4 rounded-lg text-sm text-gray-500">
                                <p><i class="fa-solid fa-info-circle mr-1"></i> This is an estimate only. The actual tax amount may vary based on assessment and verification.</p>
                            </div>
                            
                            <div class="mt-6 flex justify-center">
                                <a href="#payment" class="btn btn-secondary">
                                    Proceed to Payment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Payment Section -->
    <section id="payment" class="py-12 bg-muted">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Online Payment
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Pay Your Property Tax</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pay your property tax online securely using multiple payment options. Receipt will be generated instantly upon successful payment.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="mb-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h3 class="text-lg font-medium">Property Lookup</h3>
                            <p class="text-sm text-gray-500 mt-2 md:mt-0">First, find your property to pay taxes</p>
                        </div>
                        
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="property-id" class="block text-sm font-medium mb-1">Property ID</label>
                                    <input type="text" id="property-id" name="property_id" class="input w-full" placeholder="e.g., PROP123456">
                                </div>
                                <div class="md:flex md:items-end">
                                    <button type="button" id="lookup-btn" class="btn btn-primary w-full">Find Property</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="property-details" class="hidden mb-6 border-t pt-6">
                        <h3 class="text-lg font-medium mb-4">Property Details</h3>
                        
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Property ID</p>
                                    <p class="font-medium" id="display-property-id">PROP123456</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Owner Name</p>
                                    <p class="font-medium" id="display-owner-name">John Doe</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Property Address</p>
                                    <p class="font-medium" id="display-address">123 Main Street, North District</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Property Type</p>
                                    <p class="font-medium" id="display-type">Residential</p>
                                </div>
                            </div>
                            
                            <div class="bg-muted p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-gray-500">Pending Tax Amount</p>
                                        <p class="text-xl font-bold text-primary" id="display-tax-amount">$1,250.00</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Due Date</p>
                                        <p class="font-medium" id="display-due-date">June 30, 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="payment-form" class="hidden border-t pt-6">
                        <h3 class="text-lg font-medium mb-4">Payment Information</h3>
                        
                        <form class="space-y-6">
                            <div>
                                <label for="payment-method" class="block text-sm font-medium mb-1">Payment Method</label>
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="border rounded-lg p-3 cursor-pointer hover:bg-muted text-center">
                                        <i class="fa-solid fa-credit-card mb-2 text-xl"></i>
                                        <p class="text-sm">Credit/Debit Card</p>
                                    </div>
                                    <div class="border rounded-lg p-3 cursor-pointer hover:bg-muted text-center">
                                        <i class="fa-solid fa-building-columns mb-2 text-xl"></i>
                                        <p class="text-sm">Net Banking</p>
                                    </div>
                                    <div class="border rounded-lg p-3 cursor-pointer hover:bg-muted text-center">
                                        <i class="fa-solid fa-mobile-screen mb-2 text-xl"></i>
                                        <p class="text-sm">UPI / Wallet</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="card-number" class="block text-sm font-medium mb-1">Card Number</label>
                                <input type="text" id="card-number" name="card_number" class="input w-full" placeholder="1234 5678 9012 3456">
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="expiry-date" class="block text-sm font-medium mb-1">Expiry Date</label>
                                    <input type="text" id="expiry-date" name="expiry_date" class="input w-full" placeholder="MM/YY">
                                </div>
                                <div>
                                    <label for="cvv" class="block text-sm font-medium mb-1">CVV</label>
                                    <input type="text" id="cvv" name="cvv" class="input w-full" placeholder="123">
                                </div>
                            </div>
                            
                            <div>
                                <label for="card-holder" class="block text-sm font-medium mb-1">Card Holder Name</label>
                                <input type="text" id="card-holder" name="card_holder" class="input w-full" placeholder="John Doe">
                            </div>
                            
                            <div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="save-card" name="save_card" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="save-card" class="ml-2 block text-sm text-gray-700">Save this card for future payments</label>
                                </div>
                            </div>
                            
                            <div class="pt-2">
                                <button type="button" id="pay-now-btn" class="btn btn-primary w-full">Pay Now $1,250.00</button>
                            </div>
                            
                            <div class="text-center">
                                <p class="text-xs text-gray-500">By clicking "Pay Now", you agree to our <a href="terms.php" class="text-primary">Terms of Service</a> and <a href="privacy.php" class="text-primary">Privacy Policy</a></p>
                            </div>
                        </form>
                    </div>
                    
                    <div id="payment-success" class="hidden border-t pt-6 text-center">
                        <div class="mb-6">
                            <div class="h-20 w-20 mx-auto bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-check text-3xl"></i>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-medium mb-2">Payment Successful!</h3>
                        <p class="text-gray-600 mb-6">Your property tax payment has been successfully processed.</p>
                        
                        <div class="bg-muted p-4 rounded-lg text-left mb-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Transaction ID</p>
                                    <p class="font-medium">TXN123456789</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Payment Date</p>
                                    <p class="font-medium">April 12, 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Payment Amount</p>
                                    <p class="font-medium">$1,250.00</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Payment Method</p>
                                    <p class="font-medium">Credit Card (xxxx-xxxx-xxxx-1234)</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <button class="btn btn-outline">
                                <i class="fa-solid fa-download mr-2"></i>
                                Download Receipt
                            </button>
                            <button class="btn btn-outline">
                                <i class="fa-solid fa-envelope mr-2"></i>
                                Email Receipt
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Payment History Section -->
    <section class="py-12 bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                    Payment History
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">View Your Payment History</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Access your complete payment history, download receipts, and track your tax payment records.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center mb-6">
                        <h3 class="text-lg font-medium mb-4 lg:mb-0">Recent Payments</h3>
                        <div class="flex">
                            <input type="text" placeholder="Search transactions" class="input border-r-0 rounded-r-none">
                            <button class="bg-primary text-white px-4 rounded-l-none rounded-r-md border border-primary">
                                <i class="fa-solid fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Transaction ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        TXN123456789
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        April 12, 2024
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $1,250.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-primary hover:underline">Download</a>
                                        <a href="#" class="text-primary hover:underline ml-4">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        TXN987654321
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        January 15, 2024
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $1,250.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-primary hover:underline">Download</a>
                                        <a href="#" class="text-primary hover:underline ml-4">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        TXN456789123
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        October 10, 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        $1,250.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-primary hover:underline">Download</a>
                                        <a href="#" class="text-primary hover:underline ml-4">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-6 flex justify-center">
                        <nav class="flex items-center">
                            <button class="px-3 py-1 rounded-md mr-2 text-gray-500 hover:bg-gray-100">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button class="px-3 py-1 rounded-md mx-1 bg-primary text-white">1</button>
                            <button class="px-3 py-1 rounded-md mx-1 hover:bg-gray-100">2</button>
                            <button class="px-3 py-1 rounded-md mx-1 hover:bg-gray-100">3</button>
                            <button class="px-3 py-1 rounded-md ml-2 text-gray-500 hover:bg-gray-100">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Tax Calculator Functionality
    document.getElementById('calculate-btn').addEventListener('click', function() {
        const propertyValue = parseFloat(document.getElementById('property-value').value) || 0;
        const propertyType = document.getElementById('property-type').value;
        
        // Only proceed if property value is entered
        if (propertyValue <= 0) {
            alert('Please enter a valid property value.');
            return;
        }
        
        // Calculate tax based on property type
        let taxRate = 0.025; // Default 2.5% for residential
        
        switch(propertyType) {
            case 'commercial':
                taxRate = 0.035; // 3.5%
                break;
            case 'agricultural':
                taxRate = 0.015; // 1.5%
                break;
            case 'industrial':
                taxRate = 0.04; // 4%
                break;
        }
        
        // Calculate exemptions (simplified)
        let exemptions = 0;
        const checkedExemptions = document.querySelectorAll('input[name="exemptions[]"]:checked');
        
        checkedExemptions.forEach(function(checkbox) {
            switch(checkbox.value) {
                case 'senior_citizen':
                    exemptions += propertyValue * 0.05; // 5% exemption
                    break;
                case 'first_time_owner':
                    exemptions += propertyValue * 0.03; // 3% exemption
                    break;
                case 'energy_efficient':
                    exemptions += propertyValue * 0.02; // 2% exemption
                    break;
                case 'historic_property':
                    exemptions += propertyValue * 0.04; // 4% exemption
                    break;
            }
        });
        
        // Calculate tax
        const netValue = propertyValue - exemptions;
        const totalTax = netValue * taxRate;
        const quarterlyTax = totalTax / 4;
        
        // Format currency
        const formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        
        // Update results
        document.getElementById('base-value').textContent = formatter.format(propertyValue);
        document.getElementById('base-rate').textContent = (taxRate * 100).toFixed(1) + '%';
        document.getElementById('exemptions-value').textContent = formatter.format(exemptions);
        document.getElementById('net-value').textContent = formatter.format(netValue);
        document.getElementById('total-tax').textContent = formatter.format(totalTax);
        document.getElementById('quarterly-tax').textContent = formatter.format(quarterlyTax);
        
        // Show results
        document.getElementById('tax-result').classList.remove('hidden');
    });
    
    // Property Lookup Functionality
    document.getElementById('lookup-btn').addEventListener('click', function() {
        const propertyId = document.getElementById('property-id').value;
        
        if (!propertyId) {
            alert('Please enter a property ID');
            return;
        }
        
        // For demo purposes, show property details
        document.getElementById('display-property-id').textContent = propertyId;
        
        // Show property details and payment form
        document.getElementById('property-details').classList.remove('hidden');
        document.getElementById('payment-form').classList.remove('hidden');
    });
    
    // Payment Button Functionality
    document.getElementById('pay-now-btn').addEventListener('click', function() {
        const cardNumber = document.getElementById('card-number').value;
        const expiryDate = document.getElementById('expiry-date').value;
        const cvv = document.getElementById('cvv').value;
        const cardHolder = document.getElementById('card-holder').value;
        
        if (!cardNumber || !expiryDate || !cvv || !cardHolder) {
            alert('Please fill in all payment details');
            return;
        }
        
        // For demo purposes, show success message
        document.getElementById('property-details').classList.add('hidden');
        document.getElementById('payment-form').classList.add('hidden');
        document.getElementById('payment-success').classList.remove('hidden');
    });
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
