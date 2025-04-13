
<?php
// Include database configuration
require_once 'config/database.php';

// Initialize variables
$error = '';
$success = '';

// Process contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    $terms = isset($_POST['terms']) ? true : false;
    
    // Validate inputs
    if (empty($name)) {
        $error = 'Please enter your name.';
    } elseif (empty($email)) {
        $error = 'Please enter your email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (empty($subject)) {
        $error = 'Please select a subject.';
    } elseif (empty($message)) {
        $error = 'Please enter your message.';
    } elseif (!$terms) {
        $error = 'Please agree to the terms and conditions.';
    } else {
        // For demo purposes, we'll simulate message submission
        if ($pdo) {
            try {
                $sql = "INSERT INTO contact_messages (name, email, subject, message, created_at) 
                        VALUES (?, ?, ?, ?, NOW())";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$name, $email, $subject, $message]);
                
                $success = 'Your message has been sent successfully. We will get back to you soon.';
                
                // Reset form fields
                $name = $email = $subject = $message = '';
            } catch (PDOException $e) {
                $error = 'There was an error sending your message. Please try again later.';
                error_log("Error sending contact message: " . $e->getMessage());
            }
        } else {
            // Database not available, simulate success for demo
            $success = 'Your message has been sent successfully. We will get back to you soon.';
            
            // Reset form fields
            $name = $email = $subject = $message = '';
        }
    }
}

// Include header
include 'includes/header.php';
?>

<main>
    <section class="py-12 bg-muted">
        <div class="container-custom">
            <div class="text-center mb-10">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4">Contact Us</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Have questions about land records or property taxes? Our dedicated team is here to help
                    you with prompt assistance and expert guidance.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mt-1 mr-4">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Call Us</h4>
                                <p class="text-gray-600">Toll-free: 1-800-LAND-TAX</p>
                                <p class="text-gray-600">Mon-Sat, 8 AM - 8 PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mt-1 mr-4">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Email Us</h4>
                                <p class="text-gray-600">support@landledger.gov</p>
                                <p class="text-gray-600">Response within 24 hours</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="h-10 w-10 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mt-1 mr-4">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-medium">Visit Us</h4>
                                <p class="text-gray-600">Land Records Office</p>
                                <p class="text-gray-600">123 Government Plaza, City Center</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <h4 class="font-medium mb-3">Office Hours</h4>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <p class="text-sm text-gray-500">Monday - Friday</p>
                                    <p>9:00 AM - 5:00 PM</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Saturday</p>
                                    <p>10:00 AM - 2:00 PM</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Sunday & Holidays</p>
                                    <p>Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <h4 class="font-medium mb-3">Connect With Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="h-10 w-10 rounded-full bg-gov-700 text-white flex items-center justify-center hover:bg-gov-800 transition-colors">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gov-700 text-white flex items-center justify-center hover:bg-gov-800 transition-colors">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gov-700 text-white flex items-center justify-center hover:bg-gov-800 transition-colors">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gov-700 text-white flex items-center justify-center hover:bg-gov-800 transition-colors">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-medium mb-3">Frequently Asked Questions</h4>
                        <div class="space-y-4">
                            <div class="bg-white p-4 rounded-lg shadow-sm cursor-pointer hover:shadow-md transition-shadow">
                                <h5 class="font-medium flex items-center justify-between">
                                    How long does it take to process record updates?
                                    <i class="fa-solid fa-chevron-down text-gray-500"></i>
                                </h5>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm cursor-pointer hover:shadow-md transition-shadow">
                                <h5 class="font-medium flex items-center justify-between">
                                    Can I pay property taxes in installments?
                                    <i class="fa-solid fa-chevron-down text-gray-500"></i>
                                </h5>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm cursor-pointer hover:shadow-md transition-shadow">
                                <h5 class="font-medium flex items-center justify-between">
                                    How do I report errors in my property records?
                                    <i class="fa-solid fa-chevron-down text-gray-500"></i>
                                </h5>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="faq.php" class="text-primary font-medium hover:underline">View all FAQs</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h3 class="text-xl font-medium mb-4">Send Us a Message</h3>
                        
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
                                        <i class="fa-solid fa-circle-check text-green-400"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700">
                                            <?php echo $success; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <form class="space-y-4" action="contact.php" method="POST">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                                    <input type="text" id="name" name="name" class="input w-full" placeholder="John Doe" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" class="input w-full" placeholder="john@example.com" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium mb-1">Subject</label>
                                <select id="subject" name="subject" class="input w-full" required>
                                    <option value="" disabled <?php echo empty($subject) ? 'selected' : ''; ?>>Select a subject</option>
                                    <option value="Land Records Inquiry" <?php echo isset($subject) && $subject == 'Land Records Inquiry' ? 'selected' : ''; ?>>Land Records Inquiry</option>
                                    <option value="Property Tax Question" <?php echo isset($subject) && $subject == 'Property Tax Question' ? 'selected' : ''; ?>>Property Tax Question</option>
                                    <option value="Technical Support" <?php echo isset($subject) && $subject == 'Technical Support' ? 'selected' : ''; ?>>Technical Support</option>
                                    <option value="Feedback" <?php echo isset($subject) && $subject == 'Feedback' ? 'selected' : ''; ?>>Feedback</option>
                                    <option value="Other" <?php echo isset($subject) && $subject == 'Other' ? 'selected' : ''; ?>>Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium mb-1">Your Message</label>
                                <textarea id="message" name="message" rows="4" class="input w-full" placeholder="Please describe your query in detail..." required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="terms" name="terms" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" required>
                                <label for="terms" class="ml-2 block text-sm text-gray-700">
                                    I agree to the <a href="terms.php" class="text-primary hover:underline">Terms of Service</a> and <a href="privacy.php" class="text-primary hover:underline">Privacy Policy</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-full">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-12">
        <div class="container-custom">
            <div class="text-center mb-10">
                <h2 class="gradient-heading text-3xl font-bold mb-4">Our Offices</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Visit one of our offices for in-person assistance with land records or property tax inquiries.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card">
                    <h3 class="text-lg font-medium mb-2">Main Office</h3>
                    <p class="text-gray-600 mb-4">
                        123 Government Plaza<br>
                        City Center, State 12345<br><br>
                        Phone: (123) 456-7890<br>
                        Email: main@landledger.gov
                    </p>
                    <a href="#" class="text-primary font-medium hover:underline inline-flex items-center">
                        Get Directions
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="feature-card">
                    <h3 class="text-lg font-medium mb-2">North District</h3>
                    <p class="text-gray-600 mb-4">
                        456 North Avenue<br>
                        Northville, State 12346<br><br>
                        Phone: (123) 456-7891<br>
                        Email: north@landledger.gov
                    </p>
                    <a href="#" class="text-primary font-medium hover:underline inline-flex items-center">
                        Get Directions
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="feature-card">
                    <h3 class="text-lg font-medium mb-2">South District</h3>
                    <p class="text-gray-600 mb-4">
                        789 South Boulevard<br>
                        Southville, State 12347<br><br>
                        Phone: (123) 456-7892<br>
                        Email: south@landledger.gov
                    </p>
                    <a href="#" class="text-primary font-medium hover:underline inline-flex items-center">
                        Get Directions
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="feature-card">
                    <h3 class="text-lg font-medium mb-2">East District</h3>
                    <p class="text-gray-600 mb-4">
                        321 East Road<br>
                        Eastville, State 12348<br><br>
                        Phone: (123) 456-7893<br>
                        Email: east@landledger.gov
                    </p>
                    <a href="#" class="text-primary font-medium hover:underline inline-flex items-center">
                        Get Directions
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            
            <div class="mt-12 bg-white p-6 rounded-xl shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-xl font-medium mb-4">Book an Appointment</h3>
                        <p class="text-gray-600 mb-4">
                            For personalized assistance with complex queries, book an appointment with our experts.
                        </p>
                        <p class="text-sm text-gray-500">
                            <i class="fa-solid fa-clock mr-1"></i> 
                            Appointments available Monday to Friday, 9 AM to 4 PM.
                        </p>
                    </div>
                    
                    <div class="md:col-span-2">
                        <form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="app-name" class="block text-sm font-medium mb-1">Full Name</label>
                                <input type="text" id="app-name" class="input w-full" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="app-email" class="block text-sm font-medium mb-1">Email Address</label>
                                <input type="email" id="app-email" class="input w-full" placeholder="john@example.com">
                            </div>
                            <div>
                                <label for="app-date" class="block text-sm font-medium mb-1">Preferred Date</label>
                                <input type="date" id="app-date" class="input w-full">
                            </div>
                            <div>
                                <label for="app-time" class="block text-sm font-medium mb-1">Preferred Time</label>
                                <select id="app-time" class="input w-full">
                                    <option value="">Select a time</option>
                                    <option value="9:00 AM">9:00 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="1:00 PM">1:00 PM</option>
                                    <option value="2:00 PM">2:00 PM</option>
                                    <option value="3:00 PM">3:00 PM</option>
                                </select>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="app-reason" class="block text-sm font-medium mb-1">Reason for Appointment</label>
                                <textarea id="app-reason" rows="3" class="input w-full" placeholder="Briefly describe why you need this appointment..."></textarea>
                            </div>
                            <div class="sm:col-span-2 flex justify-end">
                                <button type="button" class="btn btn-primary">Book Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>
