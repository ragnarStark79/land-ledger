<!-- Footer -->
  <footer class="bg-gray-900 text-gray-300">
    <div class="container-custom py-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <div>
          <div class="flex items-center space-x-2 mb-6">
            <div class="h-10 w-10 rounded-full bg-white/10 flex items-center justify-center">
              <span class="text-white font-bold text-xl">LL</span>
            </div>
            <h2 class="text-xl font-bold text-white">Land Ledger</h2>
          </div>
          <p class="text-sm mb-4">
            Simplifying access to land records and property tax management for citizens through our digital platform.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="<?php echo isLoggedIn() ? 'index.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Home</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'index.php#services' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Services</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'property-records.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Land Records</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'property-tax.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Property Taxes</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'maps-surveys.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Maps & Surveys</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'recent-updates.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Recent Updates</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold text-white mb-6">Help & Support</h3>
          <ul class="space-y-3">
            <li><a href="<?php echo isLoggedIn() ? 'faqs.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">FAQs</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'help-center.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Help Center</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'support.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Technical Support</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'report-issue.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Report an Issue</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'feedback.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Feedback</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'contact-us.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Contact Us</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold text-white mb-6">Legal</h3>
          <ul class="space-y-3">
            <li><a href="<?php echo isLoggedIn() ? 'terms.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Terms of Service</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'privacy.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Privacy Policy</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'refund.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Refund Policy</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'cookie.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Cookie Policy</a></li>
            <li><a href="<?php echo isLoggedIn() ? 'accessibility.php' : 'login.php?message=Please log in to access this page'; ?>" class="hover:text-white transition-colors">Accessibility</a></li>
          </ul>
        </div>
      </div>
      
      <div class="border-t border-gray-800 pt-8">
        <div class="flex flex-col md:flex-row justify-between">
          <p class="text-sm mb-4 md:mb-0">
            &copy; <?php echo date("Y"); ?> Land Ledger. All rights reserved.
          </p>
          <p class="text-sm">
            A government initiative for digital land management
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- JavaScript Files -->
  <script src="js/app.js"></script>
</body>
</html>
