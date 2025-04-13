<?php
$pageTitle = "Feedback | Land Ledger";
include 'includes/header.php';
require_once 'config/database.php'; // Include database configuration

// Process form submission
$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;
    $feedback = isset($_POST['feedback']) ? trim($_POST['feedback']) : '';

    // Validate inputs
    if (empty($name)) {
        $errorMessage = "Please enter your name.";
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address.";
    } elseif (empty($feedback)) {
        $errorMessage = "Please enter your feedback.";
    } else {
        // Insert feedback into the database
        $sql = "INSERT INTO feedback (name, email, subject, rating, feedback, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $email, $subject, $rating, $feedback]);
            $successMessage = "Thank you for your feedback! We appreciate your input.";
            // Reset form fields
            $name = $email = $subject = $feedback = '';
            $rating = 0;
        } catch (PDOException $e) {
            $errorMessage = "An error occurred while saving your feedback. Please try again.";
            error_log("Feedback save error: " . $e->getMessage());
        }
    }
}
?>

<main class="min-h-screen">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-blue-500 to-teal-400 opacity-90"></div>
        <div class="absolute inset-0 bg-[url('images/pattern.svg')] opacity-20"></div>
        
        <div class="container-custom relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 animate-fade-in">
                Share Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-400">Feedback</span>
            </h1>
            <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto animate-slide-up">
                Your insights help us improve our services and better serve our community.
            </p>
        </div>
    </section>
    
    <!-- Feedback Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="backdrop-blur-sm bg-white/80 rounded-3xl shadow-xl overflow-hidden transform hover:scale-[1.01] transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-5">
                        <!-- Left Column - Decorative -->
                        <div class="md:col-span-2 relative p-8 bg-gradient-to-br from-blue-600 to-violet-600 flex flex-col justify-between">
                            <div class="relative z-10">
                                <h3 class="text-2xl font-bold text-white mb-6">We Value Your Input</h3>
                                <p class="text-white/90 mb-8">Your feedback is essential in helping us create a better experience for everyone using our land management services.</p>
                                
                                <div class="space-y-4 text-white">
                                    <div class="flex items-center space-x-3">
                                        <div class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">
                                            <i class="fa-solid fa-star text-yellow-300"></i>
                                        </div>
                                        <div>Rate our services</div>
                                    </div>
                                    
                                    <div class="flex items-center space-x-3">
                                        <div class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">
                                            <i class="fa-solid fa-comment text-yellow-300"></i>
                                        </div>
                                        <div>Share your experience</div>
                                    </div>
                                    
                                    <div class="flex items-center space-x-3">
                                        <div class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">
                                            <i class="fa-solid fa-lightbulb text-yellow-300"></i>
                                        </div>
                                        <div>Suggest improvements</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Decorative Elements -->
                            <div class="absolute top-0 right-0 h-32 w-32 bg-white/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
                            <div class="absolute bottom-0 left-0 h-40 w-40 bg-white/5 rounded-full -translate-x-1/2 translate-y-1/2"></div>
                        </div>
                        
                        <!-- Right Column - Form -->
                        <div class="md:col-span-3 p-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Your Feedback</h3>
                            
                            <?php if($successMessage): ?>
                                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 animate-fade-in">
                                    <p><?php echo $successMessage; ?></p>
                                </div>
                            <?php endif; ?>
                            
                            <?php if($errorMessage): ?>
                                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 animate-fade-in">
                                    <p><?php echo $errorMessage; ?></p>
                                </div>
                            <?php endif; ?>
                            
                            <form method="POST" class="space-y-6">
                                <div class="group">
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500/20 transition-all" placeholder="John Doe" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
                                </div>
                                
                                <div class="group">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500/20 transition-all" placeholder="john.doe@example.com" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                                </div>
                                
                                <div class="group">
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                    <select id="subject" name="subject" class="form-select w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500/20 transition-all">
                                        <option value="" disabled <?php echo empty($subject) ? 'selected' : ''; ?>>Select a subject</option>
                                        <option value="general" <?php echo $subject === 'general' ? 'selected' : ''; ?>>General Feedback</option>
                                        <option value="records" <?php echo $subject === 'records' ? 'selected' : ''; ?>>Land Records Services</option>
                                        <option value="taxes" <?php echo $subject === 'taxes' ? 'selected' : ''; ?>>Property Tax Services</option>
                                        <option value="website" <?php echo $subject === 'website' ? 'selected' : ''; ?>>Website Experience</option>
                                        <option value="suggestion" <?php echo $subject === 'suggestion' ? 'selected' : ''; ?>>Suggestion</option>
                                    </select>
                                </div>
                                
                                <div class="group">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Rate your experience</label>
                                    <div class="flex space-x-2 text-2xl rating-stars" id="rating">
                                        <i class="fa-regular fa-star cursor-pointer hover:text-yellow-400 transition-colors" data-value="1"></i>
                                        <i class="fa-regular fa-star cursor-pointer hover:text-yellow-400 transition-colors" data-value="2"></i>
                                        <i class="fa-regular fa-star cursor-pointer hover:text-yellow-400 transition-colors" data-value="3"></i>
                                        <i class="fa-regular fa-star cursor-pointer hover:text-yellow-400 transition-colors" data-value="4"></i>
                                        <i class="fa-regular fa-star cursor-pointer hover:text-yellow-400 transition-colors" data-value="5"></i>
                                    </div>
                                    <input type="hidden" name="rating" id="rating-value" value="<?php echo htmlspecialchars($rating ?? 0); ?>">
                                </div>
                                
                                <div class="group">
                                    <label for="feedback" class="block text-sm font-medium text-gray-700 mb-1">Your Feedback</label>
                                    <textarea id="feedback" name="feedback" rows="5" class="form-textarea w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500/20 transition-all" placeholder="Please share your thoughts, suggestions, or concerns..." required><?php echo htmlspecialchars($feedback ?? ''); ?></textarea>
                                </div>
                                
                                <div>
                                    <button type="submit" class="w-full py-3 px-6 bg-gradient-to-r from-blue-600 to-violet-600 text-white font-medium rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Submit Feedback
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials/Previous Feedback Section -->
    <section class="py-16 bg-gradient-to-b from-white to-blue-50">
        <div class="container-custom">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Users Say</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-blue-500 to-violet-500 flex items-center justify-center text-white font-bold">
                                AK
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-gray-900">Aisha Khan</h4>
                                <p class="text-sm text-gray-500">Property Owner</p>
                            </div>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "The digital land records service has made my life so much easier. I was able to access my property documents within minutes without leaving my home."
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-500 to-teal-500 flex items-center justify-center text-white font-bold">
                                RS
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-gray-900">Rahul Sharma</h4>
                                <p class="text-sm text-gray-500">Real Estate Agent</p>
                            </div>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Land Ledger has revolutionized how I help my clients. Property verification is now faster and more reliable than ever before."
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-xl shadow-md p-6 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-red-500 to-orange-500 flex items-center justify-center text-white font-bold">
                                MP
                            </div>
                            <div class="ml-4">
                                <h4 class="font-medium text-gray-900">Meera Patel</h4>
                                <p class="text-sm text-gray-500">Homeowner</p>
                            </div>
                        </div>
                        <div class="text-yellow-400">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Paying property taxes used to be such a hassle. Now I can do it online in just a few clicks. The receipt is generated instantly which is great!"
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Add custom JavaScript for the feedback page -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Handle star rating functionality
    const stars = document.querySelectorAll('.rating-stars i');
    const ratingInput = document.getElementById('rating-value');
    
    stars.forEach(star => {
        star.addEventListener('click', () => {
            const value = parseInt(star.getAttribute('data-value'));
            ratingInput.value = value;
            
            // Reset all stars
            stars.forEach(s => {
                s.classList.remove('fa-solid');
                s.classList.add('fa-regular');
                s.classList.remove('text-yellow-400');
            });
            
            // Fill stars up to selected value
            for (let i = 0; i < stars.length; i++) {
                if (i < value) {
                    stars[i].classList.remove('fa-regular');
                    stars[i].classList.add('fa-solid');
                    stars[i].classList.add('text-yellow-400');
                }
            }
        });
    });
    
    // Add animations on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('animate-slide-up');
            }
        });
    };
    
    // Initial check for elements in view
    animateOnScroll();
    
    // Check on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Form input animations
    const formGroups = document.querySelectorAll('.group');
    
    formGroups.forEach(group => {
        const input = group.querySelector('input, textarea, select');
        
        if (input) {
            input.addEventListener('focus', () => {
                group.classList.add('scale-105');
                setTimeout(() => {
                    group.classList.remove('scale-105');
                }, 200);
            });
        }
    });
});
</script>

<!-- Add custom CSS for animations -->
<style>
.animate-fade-in {
    animation: fadeIn 0.8s ease forwards;
}

.animate-slide-up {
    animation: slideUp 0.5s ease forwards;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { 
        opacity: 0;
        transform: translateY(20px);
    }
    to { 
        opacity: 1;
        transform: translateY(0);
    }
}

.group {
    transition: all 0.2s ease;
}

.form-input, .form-textarea, .form-select {
    transition: all 0.3s ease;
}
</style>

<?php include 'includes/footer.php'; ?>
