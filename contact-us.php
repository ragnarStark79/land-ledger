<?php
// Start session
session_start();

// Include database configuration
require_once 'config/database.php';

// Initialize variables
$name = '';
$email = '';
$subject = '';
$message = '';
$error = '';
$success = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate inputs
    if (empty($name)) {
        $error = 'Please enter your name.';
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (empty($subject)) {
        $error = 'Please enter a subject.';
    } elseif (empty($message)) {
        $error = 'Please enter your message.';
    } else {
        // Insert the message into the database
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            $success = 'Your message has been sent successfully. We will get back to you soon.';
            // Clear form fields after successful submission
            $name = '';
            $email = '';
            $subject = '';
            $message = '';
        } else {
            $error = 'An error occurred while sending your message. Please try again.';
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main class="py-12 animate-fadeIn">
    <div class="container-custom">
        <div class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4 gradient-heading">Contact Us</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Get in touch with our support team for assistance with land records and property taxes</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-md p-8 animate-slideUp">
                    <?php if (!empty($error)): ?>
                        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <i class="fa-solid fa-circle-exclamation text-red-400"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-red-700">
                                        <?php echo $error; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success)): ?>
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <i class="fa-solid fa-check-circle text-green-400"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700">
                                        <?php echo $success; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>
                    
                    <form action="contact-us.php" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-1">Your Name</label>
                                <input type="text" id="name" name="name" class="input w-full" placeholder="John Doe" value="<?php echo htmlspecialchars($name); ?>" required>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="input w-full" placeholder="you@example.com" value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="input w-full" placeholder="How can we help you?" value="<?php echo htmlspecialchars($subject); ?>" required>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium mb-1">Message</label>
                            <textarea id="message" name="message" rows="6" class="input w-full resize-none" placeholder="Your message here..." required><?php echo htmlspecialchars($message); ?></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary w-full md:w-auto">
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="space-y-6 animate-slideUp" style="animation-delay: 150ms;">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-lg mb-4">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-primary"></i>
                            <span>123 Government Plaza,<br>Cityville, State 12345</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-primary"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-primary"></i>
                            <span>support@landledger.gov</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-clock mr-3 text-primary"></i>
                            <span>Monday - Friday: 8am - 5pm</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-lg mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-lg mb-4">Need Immediate Assistance?</h3>
                    <p class="text-gray-600 mb-4">Our support team is available for urgent inquiries</p>
                    <a href="tel:+11234567890" class="btn btn-primary w-full">
                        <i class="fa-solid fa-phone-alt mr-2"></i>
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden animate-fadeIn">
            <div class="aspect-w-16 aspect-h-9 h-[400px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059353029!2d-74.25986548248684!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sca!4v1617978957850!5m2!1sen!2sca" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
