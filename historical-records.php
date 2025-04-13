
<?php
// Include database configuration
require_once 'config/database.php';

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Historical Land Records</h1>
      <p class="text-lg mb-8">Explore our archive of historical land records dating back to the early establishment of the region.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Timeline Navigation -->
    <div class="mb-12">
      <h2 class="text-2xl font-semibold mb-6">Browse By Era</h2>
      
      <div class="flex flex-wrap gap-3">
        <a href="#" class="px-4 py-2 bg-gov-600 text-white rounded-full text-sm font-medium">All Eras</a>
        <a href="#" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50">1800-1849</a>
        <a href="#" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50">1850-1899</a>
        <a href="#" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50">1900-1949</a>
        <a href="#" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50">1950-1999</a>
        <a href="#" class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50">2000-Present</a>
      </div>
    </div>
    
    <!-- Historical Records Collections -->
    <div class="mb-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card p-6 animate-fadeIn">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2xkJTIwZG9jdW1lbnRzfGVufDB8fDB8fHww" alt="Original Land Grants" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Original Land Grants</h3>
          <p class="text-gray-600 mb-4">The earliest recorded land grants issued by the government in the 1830s-1850s.</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
        
        <div class="card p-6 animate-fadeIn" style="animation-delay: 0.1s;">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1614036634955-ae5e90f9b9eb?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8b2xkJTIwbWFwfGVufDB8fDB8fHww" alt="Railroad Era Maps" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Railroad Era Maps</h3>
          <p class="text-gray-600 mb-4">Land surveys and property divisions during the expansion of railroads (1860s-1890s).</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
        
        <div class="card p-6 animate-fadeIn" style="animation-delay: 0.2s;">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1623228675987-57d5999f6c1f?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG9sZCUyMG5ld3NwYXBlcnxlbnwwfHwwfHx8MA%3D%3D" alt="Homestead Documents" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Homestead Documents</h3>
          <p class="text-gray-600 mb-4">Records from the Homestead Act era showing land claims and settlements (1870s-1910s).</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
        
        <div class="card p-6 animate-fadeIn" style="animation-delay: 0.3s;">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1560420025-9453f02b4751?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dmlsbGFnZSUyMHBsYW58ZW58MHx8MHx8fDA%3D" alt="Town Development Plans" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Town Development Plans</h3>
          <p class="text-gray-600 mb-4">Original city planning documents showing the development of major towns (1880s-1920s).</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
        
        <div class="card p-6 animate-fadeIn" style="animation-delay: 0.4s;">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1576153192621-7a3be10b356e?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8b2xkJTIwcGhvdG9ncmFwaHxlbnwwfHwwfHx8MA%3D%3D" alt="Depression Era Records" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Depression Era Records</h3>
          <p class="text-gray-600 mb-4">Property transactions and foreclosure documents from the Great Depression (1929-1939).</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
        
        <div class="card p-6 animate-fadeIn" style="animation-delay: 0.5s;">
          <div class="aspect-w-4 aspect-h-3 mb-4 overflow-hidden rounded-lg">
            <img src="https://images.unsplash.com/photo-1542889601-399c4f3a8402?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG9sZCUyMGNvbnN0cnVjdGlvbnxlbnwwfHwwfHx8MA%3D%3D" alt="Post-War Development" class="w-full h-full object-cover">
          </div>
          <h3 class="text-lg font-semibold mb-2">Post-War Development</h3>
          <p class="text-gray-600 mb-4">Suburban development plans and property divisions following World War II (1945-1965).</p>
          <a href="#" class="text-primary hover:underline flex items-center">
            Explore Collection <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </div>
    
    <!-- Featured Historical Record -->
    <div class="mb-16">
      <h2 class="text-2xl font-semibold mb-6">Featured Historical Document</h2>
      
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 lg:p-8">
        <div class="flex flex-col lg:flex-row gap-8">
          <div class="lg:w-1/3">
            <div class="aspect-w-3 aspect-h-4 overflow-hidden rounded-lg shadow-md">
              <img src="https://images.unsplash.com/photo-1544286783-1adca2d492a5?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG9sZCUyMGRvY3VtZW50fGVufDB8fDB8fHww" alt="Original City Charter" class="w-full h-full object-cover">
            </div>
          </div>
          
          <div class="lg:w-2/3">
            <h3 class="text-xl font-semibold mb-4">Original City Charter and Land Division (1876)</h3>
            
            <div class="space-y-4">
              <p class="text-gray-600">This rare document represents the original city charter and land division plan for our region. Signed on March 12, 1876, it established the official boundaries of the original settlement and outlined the initial allocation of land parcels to founding families.</p>
              
              <p class="text-gray-600">Historical significance:</p>
              <ul class="list-disc list-inside space-y-2 text-gray-600">
                <li>Contains signatures of all 23 founding families</li>
                <li>Includes the original street layout that is still visible in the downtown area</li>
                <li>Features hand-drawn illustrations of major landmarks</li>
                <li>Outlines the initial governance structure and land use policies</li>
              </ul>
              
              <div class="pt-4">
                <a href="#" class="btn btn-primary">
                  <i class="fa-solid fa-magnifying-glass-plus mr-2"></i>View In Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Research Tools -->
    <div>
      <h2 class="text-2xl font-semibold mb-6">Historical Research Tools</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="feature-card">
          <div class="text-gov-600 bg-gov-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <i class="fa-solid fa-magnifying-glass text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Advanced Search</h3>
          <p class="text-gray-600 mb-4">Search historical records using advanced filters like time period, property type, and geographic area.</p>
          <a href="#" class="btn btn-outline w-full">Access Tool</a>
        </div>
        
        <div class="feature-card">
          <div class="text-earth-600 bg-earth-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <i class="fa-solid fa-calendar-days text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Timeline Explorer</h3>
          <p class="text-gray-600 mb-4">View changes to properties over time with our interactive historical timeline tool.</p>
          <a href="#" class="btn btn-outline w-full">Access Tool</a>
        </div>
        
        <div class="feature-card">
          <div class="text-gold-700 bg-gold-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <i class="fa-solid fa-book text-xl"></i>
          </div>
          <h3 class="text-lg font-semibold mb-2">Research Guide</h3>
          <p class="text-gray-600 mb-4">Resources and tips for conducting effective historical property research.</p>
          <a href="#" class="btn btn-outline w-full">View Guide</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Visit Archives Section -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <h2 class="text-3xl font-bold mb-6">Visit Our Physical Archives</h2>
        <p class="text-lg mb-6 text-white/90">Not all historical records have been digitized. Visit our archival facility to access original documents and get assistance from our historical records specialists.</p>
        
        <div class="space-y-4 mb-8">
          <div class="flex items-start">
            <div class="text-white bg-white/20 w-10 h-10 rounded-full flex items-center justify-center mt-1 mr-4">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
              <h3 class="font-semibold">Address</h3>
              <p class="text-white/90">123 Archive Street, Government Complex<br>Cityville, State 12345</p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="text-white bg-white/20 w-10 h-10 rounded-full flex items-center justify-center mt-1 mr-4">
              <i class="fa-solid fa-clock"></i>
            </div>
            <div>
              <h3 class="font-semibold">Hours</h3>
              <p class="text-white/90">Monday - Friday: 9am - 4pm<br>Saturday: 10am - 2pm<br>Sunday: Closed</p>
            </div>
          </div>
          
          <div class="flex items-start">
            <div class="text-white bg-white/20 w-10 h-10 rounded-full flex items-center justify-center mt-1 mr-4">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div>
              <h3 class="font-semibold">Contact</h3>
              <p class="text-white/90">(555) 123-4567<br>archives@landledger.gov</p>
            </div>
          </div>
        </div>
        
        <a href="contact.php" class="btn bg-white text-gov-700 hover:bg-gray-100">
          Schedule a Research Visit
        </a>
      </div>
      
      <div class="relative">
        <div class="aspect-w-4 aspect-h-3 overflow-hidden rounded-xl shadow-xl">
          <img src="https://images.unsplash.com/photo-1581905764498-f1b60bae941a?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGFyY2hpdmV8ZW58MHx8MHx8fDA%3D" alt="Archives Facility" class="w-full h-full object-cover">
        </div>
        
        <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-full bg-white p-1">
          <div class="w-full h-full rounded-full bg-earth-100 flex items-center justify-center">
            <div class="text-center">
              <div class="font-bold text-earth-700 text-xl">150+</div>
              <div class="text-earth-600 text-xs">Years of<br>Records</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
