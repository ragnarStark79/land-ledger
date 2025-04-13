
<?php
// Include header
include 'includes/header.php';
?>

<main class="py-12 animate-fadeIn">
    <div class="container-custom">
        <div class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 gradient-heading">Help Center</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Find answers to common questions and get assistance with Land Ledger's property and tax services</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="feature-card text-center animate-slideUp">
                <div class="bg-gov-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-book text-2xl text-gov-700"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Documentation</h3>
                <p class="text-gray-600 mb-4">Access guides and tutorials on using our platform's features</p>
                <a href="#" class="text-primary hover:underline font-medium flex items-center justify-center">
                    View Documentation <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="feature-card text-center animate-slideUp" style="animation-delay: 100ms;">
                <div class="bg-earth-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-question-circle text-2xl text-earth-700"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">FAQs</h3>
                <p class="text-gray-600 mb-4">Find answers to frequently asked questions</p>
                <a href="faqs.php" class="text-primary hover:underline font-medium flex items-center justify-center">
                    Browse FAQs <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="feature-card text-center animate-slideUp" style="animation-delay: 200ms;">
                <div class="bg-gold-100 h-16 w-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-headset text-2xl text-gold-700"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Contact Support</h3>
                <p class="text-gray-600 mb-4">Get help from our support team</p>
                <a href="contact-us.php" class="text-primary hover:underline font-medium flex items-center justify-center">
                    Contact Us <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md p-8 mb-12 animate-fadeIn">
            <h2 class="text-2xl font-bold mb-6">Popular Topics</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Property Records</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-alt mr-2 text-primary"></i>
                                How to search for property records
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-alt mr-2 text-primary"></i>
                                Understanding record types
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-alt mr-2 text-primary"></i>
                                Accessing historical records
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-alt mr-2 text-primary"></i>
                                Updates and changes to records
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-alt mr-2 text-primary"></i>
                                Requesting certified copies
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Property Taxes</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-invoice-dollar mr-2 text-primary"></i>
                                How to pay property taxes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-invoice-dollar mr-2 text-primary"></i>
                                Understanding tax calculations
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-invoice-dollar mr-2 text-primary"></i>
                                Viewing payment history
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-invoice-dollar mr-2 text-primary"></i>
                                Downloading tax forms
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-primary transition-colors">
                                <i class="fa-solid fa-file-invoice-dollar mr-2 text-primary"></i>
                                Tax exemptions and appeals
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-r from-gov-700 to-earth-700 rounded-xl p-8 text-white mb-12 animate-fadeIn">
            <div class="flex flex-col md:flex-row md:items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl font-bold mb-2">Need Additional Help?</h2>
                    <p class="text-white/80">Our support team is ready to assist you with any questions</p>
                </div>
                <div class="flex space-x-4">
                    <a href="contact-us.php" class="btn bg-white text-gov-700 hover:bg-white/90">
                        <i class="fa-solid fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="tel:+11234567890" class="btn bg-white/20 text-white hover:bg-white/30">
                        <i class="fa-solid fa-phone mr-2"></i>
                        Call Us
                    </a>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 animate-fadeIn">
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <h3 class="font-bold mb-4 flex items-center">
                    <i class="fa-solid fa-laptop mr-2 text-primary"></i>
                    System Status
                </h3>
                <p class="text-gray-600 mb-2">Check the current status of our services</p>
                <div class="flex items-center">
                    <span class="h-3 w-3 bg-green-500 rounded-full mr-2"></span>
                    <span class="text-sm text-green-700">All systems operational</span>
                </div>
                <a href="system-status.php" class="mt-4 text-sm text-primary hover:underline flex items-center">View detailed status <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <h3 class="font-bold mb-4 flex items-center">
                    <i class="fa-solid fa-video mr-2 text-primary"></i>
                    Video Tutorials
                </h3>
                <p class="text-gray-600 mb-2">Learn how to use our platform through step-by-step video guides</p>
                <a href="#" class="mt-4 text-sm text-primary hover:underline flex items-center">Watch tutorials <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <h3 class="font-bold mb-4 flex items-center">
                    <i class="fa-solid fa-comments mr-2 text-primary"></i>
                    Community Forum
                </h3>
                <p class="text-gray-600 mb-2">Connect with other users and share information</p>
                <a href="community-fourm.php" class="mt-4 text-sm text-primary hover:underline flex items-center">Join the discussion <i class="fa-solid fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
