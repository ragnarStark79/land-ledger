
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
        <div class="absolute inset-0 bg-gradient-to-r from-earth-900/10 to-gov-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Community Forum</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Connect with fellow citizens, share experiences, and discuss topics related to land records and property taxes.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#discussions" class="btn btn-primary animate-slideLeft-scroll">
                        <i class="fa-solid fa-comments mr-2"></i>
                        Join Discussions
                    </a>
                    <a href="#create-topic" class="btn btn-secondary animate-slideRight-scroll">
                        <i class="fa-solid fa-plus mr-2"></i>
                        Create New Topic
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Forum Categories Section -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Categories
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Forum Categories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Browse through different categories to find discussions relevant to your interests.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-gov-500 to-gov-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-landmark text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Property Taxes</h3>
                            <p class="text-sm text-gray-500">156 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Discussions about property tax calculations, payment methods, and deadlines.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-earth-500 to-earth-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-book text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Land Records</h3>
                            <p class="text-sm text-gray-500">98 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Discussions about accessing, understanding, and managing land records.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-soil-500 to-soil-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-home text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Property Ownership</h3>
                            <p class="text-sm text-gray-500">124 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Discussions about property transfers, titles, deeds, and ownership verification.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-gold-500 to-gold-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-gavel text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Legal Questions</h3>
                            <p class="text-sm text-gray-500">87 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Discussions about legal aspects of property ownership and taxation.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.4s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-gov-500 to-gov-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-laptop text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">System Usage</h3>
                            <p class="text-sm text-gray-500">64 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Discussions about using the Land Ledger system, troubleshooting, and tips.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <div class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.5s;">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-earth-500 to-earth-700 text-white flex items-center justify-center mr-4">
                            <i class="fa-solid fa-bullhorn text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Announcements</h3>
                            <p class="text-sm text-gray-500">42 topics</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        Official announcements regarding system updates, tax changes, and policies.
                    </p>
                    <a href="#discussions" class="text-primary hover:underline flex items-center text-sm">
                        Browse Topics
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recent Discussions Section -->
    <section id="discussions" class="section bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                    Discussions
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Recent Topics</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Join the conversation on recent topics or search for specific discussions.
                </p>
            </div>
            
            <!-- Search and Filter Bar -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                <div class="w-full md:w-1/2">
                    <div class="relative">
                        <input type="text" placeholder="Search discussions..." class="input pr-10 w-full">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative w-40">
                        <select class="input w-full appearance-none pr-8">
                            <option value="recent">Most Recent</option>
                            <option value="popular">Most Popular</option>
                            <option value="active">Most Active</option>
                        </select>
                        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                    <a href="#create-topic" class="btn btn-secondary whitespace-nowrap">
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Topic
                    </a>
                </div>
            </div>
            
            <!-- Discussions List -->
            <div class="space-y-4 mb-8">
                <!-- Discussion Item -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 hover:shadow-md transition-all animate-fadeIn-scroll">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-gov-100 flex items-center justify-center text-gov-700">
                                <span class="font-medium">JD</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-medium text-lg hover:text-primary">
                                    <a href="#">How do I qualify for senior citizen property tax exemptions?</a>
                                </h3>
                                <div class="px-3 py-1 rounded-full bg-gov-100 text-gov-700 text-xs font-medium">
                                    Property Taxes
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                I recently turned 65 and I've heard there are some property tax exemptions available for senior citizens. Can anyone explain the qualification process and how much I might save?
                            </p>
                            <div class="flex flex-wrap items-center mt-3 text-xs text-gray-500 gap-x-4 gap-y-2">
                                <span>Posted by <span class="font-medium">John Doe</span></span>
                                <span>2 hours ago</span>
                                <span><i class="fa-solid fa-comment mr-1"></i> 12 replies</span>
                                <span><i class="fa-solid fa-eye mr-1"></i> 56 views</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Item -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 hover:shadow-md transition-all animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-earth-100 flex items-center justify-center text-earth-700">
                                <span class="font-medium">AS</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-medium text-lg hover:text-primary">
                                    <a href="#">Land survey discrepancy with my property records</a>
                                </h3>
                                <div class="px-3 py-1 rounded-full bg-earth-100 text-earth-700 text-xs font-medium">
                                    Land Records
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                I recently had a land survey done and noticed that the measurements don't exactly match what's in my property records. How serious is this discrepancy and what steps should I take to correct the records?
                            </p>
                            <div class="flex flex-wrap items-center mt-3 text-xs text-gray-500 gap-x-4 gap-y-2">
                                <span>Posted by <span class="font-medium">Anna Smith</span></span>
                                <span>Yesterday</span>
                                <span><i class="fa-solid fa-comment mr-1"></i> 8 replies</span>
                                <span><i class="fa-solid fa-eye mr-1"></i> 42 views</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Item -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 hover:shadow-md transition-all animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-soil-100 flex items-center justify-center text-soil-700">
                                <span class="font-medium">RJ</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-medium text-lg hover:text-primary">
                                    <a href="#">Transferring property to family member - documentation needed?</a>
                                </h3>
                                <div class="px-3 py-1 rounded-full bg-soil-100 text-soil-700 text-xs font-medium">
                                    Property Ownership
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                I'm planning to transfer my house to my daughter as a gift. What documentation will I need to prepare and what taxes or fees should we expect in this process? Any advice appreciated.
                            </p>
                            <div class="flex flex-wrap items-center mt-3 text-xs text-gray-500 gap-x-4 gap-y-2">
                                <span>Posted by <span class="font-medium">Robert Johnson</span></span>
                                <span>2 days ago</span>
                                <span><i class="fa-solid fa-comment mr-1"></i> 15 replies</span>
                                <span><i class="fa-solid fa-eye mr-1"></i> 78 views</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Item -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 hover:shadow-md transition-all animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-gold-100 flex items-center justify-center text-gold-700">
                                <span class="font-medium">MP</span>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-medium text-lg hover:text-primary">
                                    <a href="#">Question about easements on my property</a>
                                </h3>
                                <div class="px-3 py-1 rounded-full bg-gold-100 text-gold-700 text-xs font-medium">
                                    Legal Questions
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                I just discovered there's an easement on my property that I wasn't aware of when purchasing. It allows the utility company to access part of my land. What are my rights in this situation?
                            </p>
                            <div class="flex flex-wrap items-center mt-3 text-xs text-gray-500 gap-x-4 gap-y-2">
                                <span>Posted by <span class="font-medium">Michael Parker</span></span>
                                <span>4 days ago</span>
                                <span><i class="fa-solid fa-comment mr-1"></i> 21 replies</span>
                                <span><i class="fa-solid fa-eye mr-1"></i> 105 views</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Discussion Item -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 hover:shadow-md transition-all animate-fadeIn-scroll" style="animation-delay: 0.4s;">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-gov-100 flex items-center justify-center text-gov-700">
                                <i class="fa-solid fa-bullhorn"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-medium text-lg hover:text-primary">
                                    <a href="#">[OFFICIAL] System maintenance scheduled for this weekend</a>
                                </h3>
                                <div class="px-3 py-1 rounded-full bg-gov-100 text-gov-700 text-xs font-medium">
                                    Announcements
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-2">
                                The Land Ledger system will be undergoing scheduled maintenance this Saturday from 10 PM to 2 AM. During this time, the system may be unavailable. We apologize for any inconvenience.
                            </p>
                            <div class="flex flex-wrap items-center mt-3 text-xs text-gray-500 gap-x-4 gap-y-2">
                                <span>Posted by <span class="font-medium">System Administrator</span></span>
                                <span>1 week ago</span>
                                <span><i class="fa-solid fa-comment mr-1"></i> 6 replies</span>
                                <span><i class="fa-solid fa-eye mr-1"></i> 312 views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center">
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
                    <span class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500">
                        ...
                    </span>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        8
                    </a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Create Topic Section -->
    <section id="create-topic" class="section bg-gradient-to-br from-gov-50 to-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                    Start a Discussion
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Create New Topic</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Have a question or topic you'd like to discuss? Start a new conversation here.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="card p-6">
                    <form class="space-y-4">
                        <div>
                            <label for="topic-title" class="block text-sm font-medium mb-2">Topic Title</label>
                            <input type="text" id="topic-title" class="input w-full" placeholder="Enter a clear, specific title for your topic">
                        </div>
                        
                        <div>
                            <label for="topic-category" class="block text-sm font-medium mb-2">Category</label>
                            <select id="topic-category" class="input w-full">
                                <option value="">Select a category</option>
                                <option value="property-taxes">Property Taxes</option>
                                <option value="land-records">Land Records</option>
                                <option value="property-ownership">Property Ownership</option>
                                <option value="legal-questions">Legal Questions</option>
                                <option value="system-usage">System Usage</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="topic-content" class="block text-sm font-medium mb-2">Content</label>
                            <textarea id="topic-content" class="input w-full h-40" placeholder="Describe your topic or question in detail"></textarea>
                        </div>
                        
                        <div>
                            <label for="topic-tags" class="block text-sm font-medium mb-2">Tags (optional)</label>
                            <input type="text" id="topic-tags" class="input w-full" placeholder="Enter tags separated by commas">
                            <p class="text-xs text-gray-500 mt-1">Example: exemption, senior-citizen, documentation</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Attachments (optional)</label>
                            <div class="border-dashed border-2 border-gray-300 rounded-md p-6 text-center">
                                <div class="space-y-2">
                                    <div class="flex justify-center">
                                        <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-400"></i>
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer text-primary hover:underline">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                        </label>
                                        <p>or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, PDF up to 5MB</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-center pt-4">
                            <button type="button" class="btn btn-primary px-8 py-3">
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                Post New Topic
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="mt-6 p-4 rounded-lg bg-muted">
                    <h4 class="font-medium text-sm mb-2">Community Guidelines</h4>
                    <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                        <li>Be respectful and courteous to other community members.</li>
                        <li>Do not share personal or confidential information.</li>
                        <li>Stay on topic and use appropriate categories for your discussions.</li>
                        <li>No spam, advertising, or promotional content.</li>
                        <li>Review existing topics before creating a new one to avoid duplication.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation is handled by the existing JS
    
    // File upload preview (in a real implementation)
    const fileUpload = document.getElementById('file-upload');
    if (fileUpload) {
        fileUpload.addEventListener('change', function(e) {
            // This would show a preview of the uploaded files
            console.log('Files selected:', e.target.files);
        });
    }
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
