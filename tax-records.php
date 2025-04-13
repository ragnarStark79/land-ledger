
<?php
// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';

// Check if user is logged in
require_once 'includes/auth.php';
if (!isLoggedIn()) {
    // Redirect to login page with return URL
    header('Location: login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
    exit;
}
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-earth-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Tax Records Archive</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Access and review your complete tax payment history, assessments, and official tax documents in one place.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#search-records" class="btn btn-primary animate-slideLeft-scroll">
                        <i class="fa-solid fa-search mr-2"></i>
                        Search Records
                    </a>
                    <a href="#download-documents" class="btn btn-secondary animate-slideRight-scroll">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Documents
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Search Section -->
    <section id="search-records" class="section bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Quick Search
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Find Your Tax Records</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Search for specific tax records using various parameters. You can filter by date, property, or document type.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="card p-6 animate-fadeIn-scroll">
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="year" class="block text-sm font-medium mb-2">Tax Year</label>
                                <select id="year" class="input w-full">
                                    <option value="">Select Year</option>
                                    <?php 
                                    $currentYear = date('Y');
                                    for ($year = $currentYear; $year >= $currentYear - 10; $year--) {
                                        echo "<option value=\"$year\">$year</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="document-type" class="block text-sm font-medium mb-2">Document Type</label>
                                <select id="document-type" class="input w-full">
                                    <option value="">All Documents</option>
                                    <option value="assessment">Tax Assessment</option>
                                    <option value="receipt">Payment Receipt</option>
                                    <option value="notice">Tax Notice</option>
                                    <option value="statement">Annual Statement</option>
                                    <option value="exemption">Exemption Certificate</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="property-id" class="block text-sm font-medium mb-2">Property ID</label>
                            <input type="text" id="property-id" class="input w-full" placeholder="Enter property ID (e.g., PROP123456)">
                        </div>
                        
                        <div class="flex justify-center">
                            <button type="button" id="search-btn" class="btn btn-primary px-8">
                                <i class="fa-solid fa-search mr-2"></i>
                                Search Records
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Records Results Section (Hidden by default) -->
    <section id="search-results" class="section bg-gray-50 hidden">
        <div class="container-custom">
            <div class="text-center mb-10">
                <h2 class="gradient-heading text-3xl font-bold mb-4">Search Results</h2>
                <p class="text-gray-600 max-w-2xl mx-auto" id="results-count">
                    Showing 5 records found for your search criteria
                </p>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl overflow-hidden shadow">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Document ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200" id="results-table-body">
                        <!-- Example records - would be populated dynamically -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">DOC-123456</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">Assessment</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">Jan 15, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">PROP123456</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">$1,250.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <a href="#" class="text-primary hover:underline">View</a>
                                <a href="#" class="text-primary hover:underline ml-4">Download</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">DOC-123457</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">Receipt</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">Feb 10, 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">PROP123456</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">$1,250.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <a href="#" class="text-primary hover:underline">View</a>
                                <a href="#" class="text-primary hover:underline ml-4">Download</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-primary text-sm font-medium text-white">
                        1
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Document Downloads Section -->
    <section id="download-documents" class="section bg-gradient-to-br from-gov-50 to-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                    Common Documents
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Download Tax Documents</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Access and download standard tax forms and documents. All documents are available in PDF format.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-gov-100 text-gov-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-file-invoice text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Annual Tax Statement</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Complete annual statement of your property tax assessments and payments.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Statement
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-earth-100 text-earth-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-receipt text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Payment Receipt</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Official receipt for your most recent property tax payment.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Receipt
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-gold-100 text-gold-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-calculator text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Tax Assessment</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Detailed property tax assessment showing value calculation and rates.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Assessment
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-soil-100 text-soil-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-certificate text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Exemption Certificate</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Certificate documenting any tax exemptions applied to your property.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Certificate
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.4s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-gov-100 text-gov-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-bell text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Payment Notice</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Official notice for upcoming property tax payment due dates.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download Notice
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.5s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-lg bg-earth-100 text-earth-600 flex items-center justify-center mr-4">
                            <i class="fa-solid fa-history text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-lg">Payment History</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Complete record of all property tax payments made in the last 5 years.
                    </p>
                    <a href="#" class="btn btn-outline w-full flex justify-center items-center">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download History
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchButton = document.getElementById('search-btn');
    const resultsSection = document.getElementById('search-results');
    
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            // Show results section
            resultsSection.classList.remove('hidden');
            
            // Smooth scroll to results
            window.scrollTo({
                top: resultsSection.offsetTop - 100,
                behavior: 'smooth'
            });
            
            // In a real application, this would fetch results from the server
        });
    }
    
    // Animation on scroll functionality is handled by the existing JS
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
