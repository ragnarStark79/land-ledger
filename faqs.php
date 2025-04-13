
<?php
// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-gold-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Frequently Asked Questions</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Find answers to common questions about Land Ledger services, property records, and tax management.
                </p>
                <div class="max-w-md mx-auto relative animate-slideUp-scroll" style="animation-delay: 0.2s;">
                    <input 
                        type="text" 
                        placeholder="Search for answers..." 
                        class="input pr-10 w-full shadow-lg focus:shadow-xl transition-shadow"
                    >
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Categories
                </span>
                <h2 class="gradient-heading text-2xl font-bold mb-4">Browse by Category</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Select a category to find specific answers to your questions
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
                <a href="#general" class="card p-5 text-center hover:shadow-md transition-all hover:-translate-y-1 animate-fadeIn-scroll">
                    <div class="h-12 w-12 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-circle-info text-xl"></i>
                    </div>
                    <h3 class="font-semibold">General</h3>
                    <p class="text-xs text-gray-500 mt-1">8 questions</p>
                </a>
                
                <a href="#property-records" class="card p-5 text-center hover:shadow-md transition-all hover:-translate-y-1 animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="h-12 w-12 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-file-lines text-xl"></i>
                    </div>
                    <h3 class="font-semibold">Property Records</h3>
                    <p class="text-xs text-gray-500 mt-1">12 questions</p>
                </a>
                
                <a href="#property-taxes" class="card p-5 text-center hover:shadow-md transition-all hover:-translate-y-1 animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="h-12 w-12 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-hand-holding-dollar text-xl"></i>
                    </div>
                    <h3 class="font-semibold">Property Taxes</h3>
                    <p class="text-xs text-gray-500 mt-1">15 questions</p>
                </a>
                
                <a href="#account-technical" class="card p-5 text-center hover:shadow-md transition-all hover:-translate-y-1 animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                    <div class="h-12 w-12 rounded-full bg-soil-100 text-soil-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-gear text-xl"></i>
                    </div>
                    <h3 class="font-semibold">Account & Technical</h3>
                    <p class="text-xs text-gray-500 mt-1">10 questions</p>
                </a>
            </div>
            
            <!-- General Questions -->
            <div id="general" class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="h-10 w-10 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <h2 class="text-xl font-bold">General Questions</h2>
                </div>
                
                <div class="space-y-4 animate-fadeIn-scroll">
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What is Land Ledger?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Land Ledger is a digital platform developed by the government to streamline and modernize the management of land records and property taxes. It provides citizens with easy access to their property information, tax records, and related services online, eliminating the need for time-consuming visits to government offices.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How do I create an account on Land Ledger?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>To create an account on Land Ledger:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Click on the "Register" button in the top-right corner of the homepage</li>
                                <li>Fill in your personal details, including your name, email, and phone number</li>
                                <li>Create a secure password</li>
                                <li>Verify your identity using one of the available methods (Aadhaar/SSN/National ID)</li>
                                <li>Complete the verification process via email or mobile</li>
                                <li>Once verified, you can log in and start using Land Ledger services</li>
                            </ol>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What services does Land Ledger provide?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Land Ledger offers a comprehensive range of services related to land records and property taxes:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>Access to digital property records and documents</li>
                                <li>Property tax calculation, payment, and history tracking</li>
                                <li>Online application for various property-related certificates</li>
                                <li>Digital maps and survey information</li>
                                <li>Property ownership verification</li>
                                <li>Notifications for tax due dates and important updates</li>
                                <li>Community forum for discussions</li>
                                <li>Help resources and support</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">Is Land Ledger available nationwide?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Yes, Land Ledger is available nationwide. However, certain features and data availability may vary by region as different local governments are integrating their systems at different paces. The platform is continuously expanding its coverage to ensure comprehensive service across all regions.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Property Records Questions -->
            <div id="property-records" class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="h-10 w-10 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h2 class="text-xl font-bold">Property Records Questions</h2>
                </div>
                
                <div class="space-y-4 animate-fadeIn-scroll">
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How do I access my property records?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>To access your property records:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Log in to your Land Ledger account</li>
                                <li>Navigate to the "Property Records" section</li>
                                <li>Select the property you wish to view from your list of properties</li>
                                <li>You'll see options to view different types of records associated with that property</li>
                            </ol>
                            <p class="mt-2">If you don't see your property listed, you may need to link it to your account first using the "Add Property" feature and providing the necessary verification documents.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What types of property documents are available on Land Ledger?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Land Ledger provides access to various property documents including:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>Property deeds and titles</li>
                                <li>Land survey reports and maps</li>
                                <li>Property tax assessment records</li>
                                <li>Tax payment receipts and history</li>
                                <li>Ownership certificates</li>
                                <li>Encumbrance certificates</li>
                                <li>Mutation records</li>
                                <li>Building permits and approvals</li>
                                <li>Historical ownership records</li>
                            </ul>
                            <p class="mt-2">The availability of specific documents may vary based on your region and the digitization status of local records.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How do I update information in my property records?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>To update information in your property records:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Log in to your Land Ledger account</li>
                                <li>Navigate to "Property Records" and select the property</li>
                                <li>Click on "Request Update" or "Correction"</li>
                                <li>Fill out the form specifying what information needs to be updated</li>
                                <li>Upload any supporting documentation</li>
                                <li>Submit your request</li>
                            </ol>
                            <p class="mt-2">The request will be reviewed by the relevant authorities, and you'll receive notifications about the status. Some updates may require physical verification or additional documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Property Taxes Questions -->
            <div id="property-taxes" class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="h-10 w-10 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                    <h2 class="text-xl font-bold">Property Taxes Questions</h2>
                </div>
                
                <div class="space-y-4 animate-fadeIn-scroll">
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How is my property tax calculated?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Property tax is typically calculated based on:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>The assessed value of your property</li>
                                <li>The applicable tax rate for your property type and location</li>
                                <li>Any exemptions or deductions you may qualify for</li>
                            </ul>
                            <p class="mt-2">The formula is generally: Property Tax = (Assessed Value × Tax Rate) - Exemptions</p>
                            <p class="mt-2">You can use the Tax Calculator in the "Property Tax" section to estimate your taxes based on current rates and your property details.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What payment methods are accepted for property taxes?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Land Ledger accepts various payment methods for property taxes:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>Credit/Debit Cards</li>
                                <li>Net Banking</li>
                                <li>UPI/Mobile Wallets</li>
                                <li>Electronic Fund Transfers</li>
                                <li>Automatic Scheduled Payments</li>
                            </ul>
                            <p class="mt-2">All online payments are secured with encryption and you'll receive an instant digital receipt upon successful payment.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What exemptions are available for property taxes?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Several exemptions may be available depending on your circumstances:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>Senior Citizen Exemption</li>
                                <li>Veteran Exemption</li>
                                <li>Disability Exemption</li>
                                <li>Homestead Exemption</li>
                                <li>Agricultural Land Exemption</li>
                                <li>Energy-Efficient Home Exemption</li>
                                <li>Historical Property Exemption</li>
                            </ul>
                            <p class="mt-2">Eligibility criteria and exemption amounts vary by location. You can check your eligibility in the "Tax Exemptions" section and apply online if you qualify.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What happens if I miss my property tax payment deadline?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>If you miss your property tax payment deadline:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Late fees will start accruing (typically 1-2% per month)</li>
                                <li>You'll receive payment reminders via email and notifications</li>
                                <li>After continued non-payment, a tax lien may be placed on your property</li>
                                <li>In extreme cases, prolonged non-payment could lead to foreclosure</li>
                            </ol>
                            <p class="mt-2">If you're having difficulty making payments, contact the support team through the "Help Center" to discuss payment plan options before penalties accumulate.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Account & Technical Questions -->
            <div id="account-technical" class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="h-10 w-10 rounded-full bg-soil-100 text-soil-700 flex items-center justify-center mr-3">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <h2 class="text-xl font-bold">Account & Technical Questions</h2>
                </div>
                
                <div class="space-y-4 animate-fadeIn-scroll">
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How do I reset my password?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>To reset your password:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Click on "Login" in the top-right corner</li>
                                <li>Select "Forgot Password"</li>
                                <li>Enter the email address associated with your account</li>
                                <li>Check your email for a password reset link</li>
                                <li>Follow the link to create a new secure password</li>
                            </ol>
                            <p class="mt-2">If you don't receive the email within a few minutes, check your spam folder or contact support for assistance.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">How do I update my contact information?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>To update your contact information:</p>
                            <ol class="list-decimal list-inside mt-2 space-y-1">
                                <li>Log in to your Land Ledger account</li>
                                <li>Click on your profile icon in the top-right corner</li>
                                <li>Select "Account Settings" or "Profile"</li>
                                <li>Update your email, phone number, or mailing address</li>
                                <li>Click "Save Changes"</li>
                            </ol>
                            <p class="mt-2">Changes to critical contact information may require verification for security purposes.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">Is my personal information secure on Land Ledger?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Yes, Land Ledger prioritizes the security of your personal information:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>All data is encrypted using industry-standard encryption</li>
                                <li>We use secure authentication methods and multi-factor authentication</li>
                                <li>Regular security audits and compliance with data protection regulations</li>
                                <li>Strict access controls for system administrators</li>
                                <li>Continuous monitoring for suspicious activities</li>
                            </ul>
                            <p class="mt-2">For more details on how we protect your information, please review our <a href="privacy-policy.php" class="text-primary hover:underline">Privacy Policy</a>.</p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item -->
                    <div class="card p-4 hover:shadow-md transition-all">
                        <button class="faq-toggle w-full flex justify-between items-center">
                            <h3 class="font-semibold text-left">What browsers are supported by Land Ledger?</h3>
                            <i class="fa-solid fa-chevron-down text-gray-400 transition-transform"></i>
                        </button>
                        <div class="faq-content hidden mt-3 text-gray-600 border-t pt-3">
                            <p>Land Ledger supports all modern browsers, including:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1">
                                <li>Google Chrome (recommended)</li>
                                <li>Mozilla Firefox</li>
                                <li>Microsoft Edge</li>
                                <li>Safari</li>
                                <li>Opera</li>
                            </ul>
                            <p class="mt-2">For the best experience, we recommend using the latest version of your preferred browser. The platform is also mobile-responsive and works on smartphones and tablets.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Still need help section -->
            <div class="text-center p-8 bg-gradient-to-r from-gov-100 to-earth-100 rounded-xl animate-fadeIn-scroll">
                <h3 class="text-xl font-bold mb-2">Still Need Help?</h3>
                <p class="text-gray-600 mb-6 max-w-xl mx-auto">
                    If you couldn't find the answer to your question, our support team is ready to help you.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="contact-us.php" class="btn btn-primary">
                        <i class="fa-solid fa-envelope mr-2"></i>
                        Contact Support
                    </a>
                    <a href="help-center.php" class="btn btn-outline">
                        <i class="fa-solid fa-circle-question mr-2"></i>
                        Help Center
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ toggle functionality
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            // Toggle content visibility
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });
    });
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
