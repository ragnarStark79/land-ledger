
<?php
// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Support Center</h1>
      <p class="text-lg mb-8">Get assistance with property records, tax questions, and technical support.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Support Options -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="feature-card">
        <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-book-open text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Help Center</h3>
        <p class="text-gray-600 mb-4">Browse our knowledge base for answers to common questions about property records and tax management.</p>
        <a href="help-center.php" class="btn btn-primary w-full">
          <i class="fa-solid fa-book-open-reader mr-2"></i>Browse Knowledge Base
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-headset text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">Contact Support</h3>
        <p class="text-gray-600 mb-4">Reach out to our support team for personalized assistance with your specific questions.</p>
        <a href="contact.php" class="btn btn-primary w-full">
          <i class="fa-solid fa-paper-plane mr-2"></i>Contact Us
        </a>
      </div>
      
      <div class="feature-card">
        <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
          <i class="fa-solid fa-circle-question text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold mb-2">FAQs</h3>
        <p class="text-gray-600 mb-4">Find answers to the most frequently asked questions about our services and processes.</p>
        <a href="faqs.php" class="btn btn-primary w-full">
          <i class="fa-solid fa-question mr-2"></i>View FAQs
        </a>
      </div>
    </div>
    
    <!-- Quick Support Topics -->
    <h2 class="text-2xl font-semibold text-center mb-8">Popular Support Topics</h2>
    
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 mb-16">
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-magnifying-glass text-blue-600"></i>
        </div>
        <h3 class="font-medium text-sm">Finding Property Records</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-credit-card text-green-600"></i>
        </div>
        <h3 class="font-medium text-sm">Making Tax Payments</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-calculator text-purple-600"></i>
        </div>
        <h3 class="font-medium text-sm">Property Tax Calculations</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-file-circle-check text-amber-600"></i>
        </div>
        <h3 class="font-medium text-sm">Tax Exemptions</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-scale-balanced text-red-600"></i>
        </div>
        <h3 class="font-medium text-sm">Assessment Appeals</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-user-gear text-indigo-600"></i>
        </div>
        <h3 class="font-medium text-sm">Account Management</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-map text-teal-600"></i>
        </div>
        <h3 class="font-medium text-sm">Maps & Surveys</h3>
      </a>
      
      <a href="#" class="bg-white border border-gray-200 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all">
        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
          <i class="fa-solid fa-file-pdf text-orange-600"></i>
        </div>
        <h3 class="font-medium text-sm">Forms & Applications</h3>
      </a>
    </div>
    
    <!-- System Status -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm mb-16">
      <div class="bg-gov-100 p-4 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gov-700">System Status</h2>
      </div>
      
      <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <h3 class="font-semibold mb-4">Current Service Status</h3>
            <ul class="space-y-3">
              <li class="flex items-center justify-between">
                <span>Property Record Search</span>
                <span class="flex items-center text-green-600">
                  <i class="fa-solid fa-circle text-xs mr-2"></i> Operational
                </span>
              </li>
              <li class="flex items-center justify-between">
                <span>Online Tax Payments</span>
                <span class="flex items-center text-green-600">
                  <i class="fa-solid fa-circle text-xs mr-2"></i> Operational
                </span>
              </li>
              <li class="flex items-center justify-between">
                <span>User Account Access</span>
                <span class="flex items-center text-green-600">
                  <i class="fa-solid fa-circle text-xs mr-2"></i> Operational
                </span>
              </li>
              <li class="flex items-center justify-between">
                <span>Form Submissions</span>
                <span class="flex items-center text-green-600">
                  <i class="fa-solid fa-circle text-xs mr-2"></i> Operational
                </span>
              </li>
              <li class="flex items-center justify-between">
                <span>Map Viewer</span>
                <span class="flex items-center text-yellow-600">
                  <i class="fa-solid fa-circle text-xs mr-2"></i> Partial Outage
                </span>
              </li>
            </ul>
          </div>
          
          <div class="border-t md:border-t-0 md:border-l border-gray-200 pt-6 md:pt-0 md:pl-6">
            <h3 class="font-semibold mb-4">Scheduled Maintenance</h3>
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
              <div class="flex">
                <div class="flex-shrink-0">
                  <i class="fa-solid fa-circle-info text-blue-400"></i>
                </div>
                <div class="ml-3">
                  <p class="text-sm text-blue-700">
                    <span class="font-medium">Upcoming Maintenance:</span> The system will be down for maintenance on Sunday, April 16, 2023, from 2:00 AM to 6:00 AM EST.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="mt-4">
              <h4 class="text-sm font-medium text-gray-500 mb-2">Recent Incidents</h4>
              <div class="space-y-3 text-sm">
                <div>
                  <p class="font-medium">April 5, 2023 - Map Viewer Performance</p>
                  <p class="text-gray-600">The map viewer is currently experiencing slow load times for detailed property maps. Our team is working to resolve this issue.</p>
                </div>
                <div>
                  <p class="font-medium">March 28, 2023 - Resolved: Payment Processing Delay</p>
                  <p class="text-gray-600">Some users experienced delays in payment confirmation. This issue has been resolved.</p>
                </div>
              </div>
            </div>
            
            <div class="mt-6">
              <a href="system-status.php" class="text-primary hover:underline flex items-center text-sm">
                <i class="fa-solid fa-arrow-right mr-1"></i> View Full System Status
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Support Request -->
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl font-semibold text-center mb-8">Submit a Support Request</h2>
      
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-6">
          <form action="#" method="POST">
            <div class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                  <input type="text" id="name" name="name" class="input w-full" required>
                </div>
                
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                  <input type="email" id="email" name="email" class="input w-full" required>
                </div>
              </div>
              
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <input type="text" id="subject" name="subject" class="input w-full" required>
              </div>
              
              <div>
                <label for="request_type" class="block text-sm font-medium text-gray-700 mb-1">Request Type</label>
                <select id="request_type" name="request_type" class="input w-full" required>
                  <option value="">Select a request type</option>
                  <option value="property_records">Property Records Assistance</option>
                  <option value="tax_payment">Tax Payment Issue</option>
                  <option value="exemptions">Exemptions & Relief Programs</option>
                  <option value="technical">Technical Support</option>
                  <option value="other">Other Inquiry</option>
                </select>
              </div>
              
              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea id="message" name="message" rows="5" class="input w-full" required></textarea>
              </div>
              
              <div>
                <label for="attachment" class="block text-sm font-medium text-gray-700 mb-1">Attachments (Optional)</label>
                <div class="flex items-center space-x-2">
                  <input type="file" id="attachment" name="attachment" class="hidden" multiple>
                  <label for="attachment" class="btn btn-outline py-2 px-4 cursor-pointer">
                    <i class="fa-solid fa-paperclip mr-2"></i>Attach Files
                  </label>
                  <span class="text-sm text-gray-500" id="file-selected">No file selected</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Maximum 5 files, 5MB each. Supported formats: PDF, JPG, PNG</p>
              </div>
              
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="copy" name="copy" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                </div>
                <div class="ml-3 text-sm">
                  <label for="copy" class="text-gray-700">Send me a copy of this request</label>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary w-full">
                <i class="fa-solid fa-paper-plane mr-2"></i>Submit Support Request
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Support Channels -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">Other Ways to Get Support</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-gov-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-phone text-gov-600"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">Phone Support</h3>
        <p class="text-gray-600 text-center mb-4">Speak directly with a support representative during business hours.</p>
        <div class="text-center">
          <p class="font-medium">(555) 123-4567</p>
          <p class="text-sm text-gray-500">Monday-Friday: 8am - 5pm</p>
        </div>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-earth-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-building text-earth-600"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">In-Person Support</h3>
        <p class="text-gray-600 text-center mb-4">Visit our office for face-to-face assistance with property records or tax questions.</p>
        <div class="text-center">
          <p class="font-medium">123 Government Way</p>
          <p class="text-sm text-gray-500">Cityville, ST 12345</p>
          <p class="text-sm text-gray-500">Monday-Friday: 8am - 5pm</p>
        </div>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-12 h-12 bg-gold-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-brands fa-facebook-messenger text-gold-700"></i>
          </div>
        </div>
        <h3 class="font-semibold text-center mb-3">Live Chat</h3>
        <p class="text-gray-600 text-center mb-4">Connect with our support team instantly through live chat on our website.</p>
        <div class="text-center">
          <button class="btn btn-primary">
            <i class="fa-solid fa-comments mr-2"></i>Start Live Chat
          </button>
          <p class="text-sm text-gray-500 mt-2">Available Monday-Friday: 8am - 7pm</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // File attachment script
  document.getElementById('attachment').addEventListener('change', function(e) {
    const fileCount = e.target.files.length;
    document.getElementById('file-selected').textContent = fileCount > 0 ? 
      `${fileCount} file(s) selected` : 'No file selected';
  });
</script>

<?php include 'includes/footer.php'; ?>
