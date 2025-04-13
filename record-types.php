
<?php
// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Land Record Types</h1>
      <p class="text-lg mb-8">Explore the different types of land records available in our database and their purposes.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Sidebar -->
      <div class="lg:col-span-1">
        <div class="sticky top-24 bg-gray-50 rounded-xl p-6 border border-gray-200 shadow-sm">
          <h2 class="text-xl font-semibold mb-4">Record Categories</h2>
          <nav>
            <ul class="space-y-2">
              <li>
                <a href="#title-records" class="flex items-center p-3 rounded-lg hover:bg-white hover:shadow-sm transition-all">
                  <div class="w-8 h-8 rounded-full bg-gov-100 flex items-center justify-center mr-3">
                    <i class="fa-solid fa-file-contract text-gov-600"></i>
                  </div>
                  <span>Title Records</span>
                </a>
              </li>
              <li>
                <a href="#deed-records" class="flex items-center p-3 rounded-lg hover:bg-white hover:shadow-sm transition-all">
                  <div class="w-8 h-8 rounded-full bg-earth-100 flex items-center justify-center mr-3">
                    <i class="fa-solid fa-file-signature text-earth-600"></i>
                  </div>
                  <span>Deed Records</span>
                </a>
              </li>
              <li>
                <a href="#survey-records" class="flex items-center p-3 rounded-lg hover:bg-white hover:shadow-sm transition-all">
                  <div class="w-8 h-8 rounded-full bg-gold-100 flex items-center justify-center mr-3">
                    <i class="fa-solid fa-map text-gold-700"></i>
                  </div>
                  <span>Survey Records</span>
                </a>
              </li>
              <li>
                <a href="#tax-records" class="flex items-center p-3 rounded-lg hover:bg-white hover:shadow-sm transition-all">
                  <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                    <i class="fa-solid fa-receipt text-blue-600"></i>
                  </div>
                  <span>Tax Records</span>
                </a>
              </li>
              <li>
                <a href="#historical-records" class="flex items-center p-3 rounded-lg hover:bg-white hover:shadow-sm transition-all">
                  <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                    <i class="fa-solid fa-book text-purple-600"></i>
                  </div>
                  <span>Historical Records</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      
      <!-- Main Content -->
      <div class="lg:col-span-2">
        <!-- Title Records -->
        <div id="title-records" class="mb-16 scroll-mt-24 animate-fadeIn">
          <div class="flex items-center mb-6">
            <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
              <i class="fa-solid fa-file-contract text-2xl"></i>
            </div>
            <h2 class="text-2xl font-semibold">Title Records</h2>
          </div>
          
          <p class="mb-6 text-gray-600">Title records are official documents that establish legal ownership of land and real property. These records are essential for property transactions and serve as proof of ownership.</p>
          
          <div class="bg-white border border-gray-200 rounded-lg overflow-hidden mb-6">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record Subtype</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                  <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Search Availability</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Title Certificate</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Official certificate issued by land registry office proving ownership</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Title Registration</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Registration of a new property title with governing authority</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Title Transfer</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Documentation of title ownership change between parties</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Title Search</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Official report showing ownership history and liens</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-clock text-amber-500"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="flex gap-4">
            <a href="search-records.php?type=title" class="btn btn-primary">
              <i class="fa-solid fa-search mr-2"></i>Search Title Records
            </a>
            <a href="#" class="btn btn-outline">
              <i class="fa-solid fa-circle-info mr-2"></i>More Information
            </a>
          </div>
        </div>
        
        <!-- Deed Records -->
        <div id="deed-records" class="mb-16 scroll-mt-24 animate-fadeIn">
          <div class="flex items-center mb-6">
            <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
              <i class="fa-solid fa-file-signature text-2xl"></i>
            </div>
            <h2 class="text-2xl font-semibold">Deed Records</h2>
          </div>
          
          <p class="mb-6 text-gray-600">Deed records are legal documents used to transfer property ownership from one party to another. These documents contain vital information about the property and the transfer transaction.</p>
          
          <div class="bg-white border border-gray-200 rounded-lg overflow-hidden mb-6">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record Subtype</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                  <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Search Availability</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Warranty Deed</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Transfer with guarantees about the property title</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Quitclaim Deed</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Transfer with no guarantees about the property title</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Special Warranty Deed</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Transfer with limited guarantees about the property title</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Gift Deed</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Transfer of property as a gift with no monetary exchange</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="flex gap-4">
            <a href="search-records.php?type=deed" class="btn btn-primary">
              <i class="fa-solid fa-search mr-2"></i>Search Deed Records
            </a>
            <a href="#" class="btn btn-outline">
              <i class="fa-solid fa-circle-info mr-2"></i>More Information
            </a>
          </div>
        </div>
        
        <!-- Survey Records -->
        <div id="survey-records" class="mb-16 scroll-mt-24 animate-fadeIn">
          <div class="flex items-center mb-6">
            <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
              <i class="fa-solid fa-map text-2xl"></i>
            </div>
            <h2 class="text-2xl font-semibold">Survey Records</h2>
          </div>
          
          <p class="mb-6 text-gray-600">Survey records document the boundaries, dimensions, and features of a property. These records are created by professional surveyors and are used for various property transactions and planning purposes.</p>
          
          <div class="bg-white border border-gray-200 rounded-lg overflow-hidden mb-6">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Record Subtype</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                  <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Search Availability</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Boundary Survey</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Documents the legal boundaries of a property</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Topographic Survey</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Shows elevation and physical features of land</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Subdivision Plan</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Details how a property is divided into smaller lots</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-circle-check text-green-500"></i></td>
                </tr>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ALTA Survey</td>
                  <td class="px-6 py-4 text-sm text-gray-500">Comprehensive survey meeting specific standards</td>
                  <td class="px-6 py-4 text-sm text-gray-500 text-center"><i class="fa-solid fa-clock text-amber-500"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="flex gap-4">
            <a href="search-records.php?type=survey" class="btn btn-primary">
              <i class="fa-solid fa-search mr-2"></i>Search Survey Records
            </a>
            <a href="#" class="btn btn-outline">
              <i class="fa-solid fa-circle-info mr-2"></i>More Information
            </a>
          </div>
        </div>
        
        <!-- Additional categories would follow the same pattern -->

        <!-- Tax Records and Historical Records sections would be added here with similar structure -->
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl font-semibold text-center mb-12">Frequently Asked Questions</h2>
      
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
          <h3 class="text-lg font-medium mb-2">What's the difference between a title and a deed?</h3>
          <p class="text-gray-600">A title is the legal concept of ownership, while a deed is the physical legal document that transfers title from one person to another.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
          <h3 class="text-lg font-medium mb-2">How do I know which record type I need?</h3>
          <p class="text-gray-600">The record type you need depends on your purpose. For property transactions, you'll typically need title and deed records. For construction or boundary disputes, survey records are essential.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
          <h3 class="text-lg font-medium mb-2">How far back do the historical records go?</h3>
          <p class="text-gray-600">Our digital system contains records dating back to 1950. For older historical records, you may need to request access to our physical archives.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
          <h3 class="text-lg font-medium mb-2">Can I request certified copies of these records?</h3>
          <p class="text-gray-600">Yes, certified copies of all record types can be requested through our system. Additional fees may apply for certification.</p>
        </div>
      </div>
      
      <div class="text-center mt-8">
        <a href="faqs.php" class="btn btn-outline">
          <i class="fa-solid fa-circle-question mr-2"></i>View All FAQs
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
