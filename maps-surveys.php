
<?php
require_once 'includes/header.php';
?>

<main>
  <!-- Hero Section -->
  <section class="bg-gradient-to-br from-gov-600 to-earth-600 text-white py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
      <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800">
        <pattern id="grid-pattern" width="50" height="50" patternUnits="userSpaceOnUse">
          <path d="M 50 0 L 0 0 0 50" fill="none" stroke="currentColor" stroke-width="1" opacity="0.5"></path>
        </pattern>
        <rect width="100%" height="100%" fill="url(#grid-pattern)"></rect>
      </svg>
    </div>
    
    <div class="container-custom relative z-10">
      <div class="max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fadeIn-scroll animate-fadeIn">Maps & Surveys</h1>
        <p class="text-lg md:text-xl mb-8 opacity-90 animate-slideUp-scroll animate-slideUp">
          Access detailed geographical information, property boundaries, and land surveys with our interactive mapping tools.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#map-section" class="btn btn-accent animate-fadeIn-scroll animate-fadeIn">
            <i class="fa-solid fa-map-location-dot mr-2"></i>
            Explore Map
          </a>
          <a href="#survey-section" class="btn btn-outline bg-white/20 text-white hover:bg-white hover:text-primary animate-fadeIn-scroll animate-fadeIn">
            <i class="fa-solid fa-ruler-combined mr-2"></i>
            Survey Records
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Info Section -->
  <section class="py-12 md:py-16 bg-gradient-to-b from-background to-muted">
    <div class="container-custom">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="animate-slideLeft-scroll animate-slideLeft">
          <span class="text-earth-600 font-medium text-sm uppercase tracking-wider">Interactive Mapping</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-6 gradient-heading">Explore Property Boundaries</h2>
          <p class="text-gray-700 mb-6">
            Our interactive map provides detailed property boundaries, zoning information, and land survey data to help you better understand your property and the surrounding area.
          </p>
          <ul class="space-y-3">
            <li class="flex items-start">
              <i class="fa-solid fa-check-circle text-earth-600 mt-1 mr-3"></i>
              <span>View property boundaries with precise coordinates</span>
            </li>
            <li class="flex items-start">
              <i class="fa-solid fa-check-circle text-earth-600 mt-1 mr-3"></i>
              <span>Access historical land survey data and changes over time</span>
            </li>
            <li class="flex items-start">
              <i class="fa-solid fa-check-circle text-earth-600 mt-1 mr-3"></i>
              <span>Check zoning regulations applicable to specific properties</span>
            </li>
            <li class="flex items-start">
              <i class="fa-solid fa-check-circle text-earth-600 mt-1 mr-3"></i>
              <span>Download maps and survey documents for official use</span>
            </li>
          </ul>
        </div>
        <div class="rounded-lg overflow-hidden shadow-xl animate-slideRight-scroll animate-slideRight">
          <img src="https://images.unsplash.com/photo-1482938289607-e9573fc25ebb?auto=format&fit=crop&w=800&q=80" 
               alt="Aerial view of land property" 
               class="w-full h-auto object-cover aspect-[4/3]" />
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Map Section -->
  <section id="map-section" class="py-12 md:py-16">
    <div class="container-custom">
      <div class="text-center mb-12 animate-fadeIn-scroll animate-fadeIn">
        <span class="text-earth-600 font-medium text-sm uppercase tracking-wider">Property Visualization</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4 gradient-heading">Interactive Property Map</h2>
        <p class="max-w-3xl mx-auto text-gray-700">
          Explore property boundaries, zoning information, and land surveys with our interactive map tool.
        </p>
      </div>
      
      <div class="border border-gray-200 rounded-lg shadow-lg overflow-hidden animate-fadeIn-scroll animate-fadeIn">
        <!-- Google Maps Embed - Using "flower bloom" location in Tokyo -->
        <div id="property-map" class="w-full h-[500px] bg-gray-100 relative">
          <iframe 
            id="google-map-iframe"
            width="100%" 
            height="100%" 
            style="border:0; position: absolute; top: 0; left: 0; z-index: 10;" 
            loading="lazy" 
            allowfullscreen 
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!4v1681768612199!6m8!1m7!1s0mx0L9O-Ol_iZ1ywWNKZBg!2m2!1d35.69834716797987!2d139.7158621859076!3f74.48!4f11.14!5f0.7999999999999998">
          </iframe>
          <!-- Loading indicator that will be hidden once the map loads -->
          <div class="absolute inset-0 flex items-center justify-center" id="map-loading" style="z-index: 5;">
            <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-primary"></div>
          </div>
        </div>
      </div>
      
      <div class="mt-8 bg-white p-6 rounded-lg shadow-md animate-slideUp-scroll animate-slideUp">
        <div class="flex flex-wrap gap-4 mb-6">
          <button class="btn btn-secondary map-filter-btn" data-filter="all">
            <i class="fa-solid fa-layer-group mr-2"></i>
            All Properties
          </button>
          <button class="btn btn-outline map-filter-btn" data-filter="residential">
            <i class="fa-solid fa-home mr-2"></i>
            Residential
          </button>
          <button class="btn btn-outline map-filter-btn" data-filter="commercial">
            <i class="fa-solid fa-building mr-2"></i>
            Commercial
          </button>
          <button class="btn btn-outline map-filter-btn" data-filter="agricultural">
            <i class="fa-solid fa-tractor mr-2"></i>
            Agricultural
          </button>
        </div>
        <div class="text-sm text-gray-600">
          <p><i class="fa-solid fa-circle-info mr-1"></i> Click on a property to view detailed information and available survey records.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Survey Records Section -->
  <section id="survey-section" class="py-12 md:py-16 bg-gradient-to-b from-muted to-background">
    <!-- ... keep existing code (Survey Records Section) -->
  </section>

  <!-- FAQ Section -->
  <section class="py-12 md:py-16">
    <!-- ... keep existing code (FAQ Section) -->
  </section>
</main>

<script>
  // Modified script to ensure the Google Maps iframe is displayed
  document.addEventListener('DOMContentLoaded', function() {
    // Only hide the loading indicator after iframe has fully loaded
    const mapIframe = document.getElementById('google-map-iframe');
    const mapLoading = document.getElementById('map-loading');
    
    if (mapIframe && mapLoading) {
      mapIframe.onload = function() {
        // Hide loading indicator after the iframe loads
        mapLoading.classList.add('hidden');
      };
      
      // Set a backup timeout in case the onload event doesn't fire
      setTimeout(function() {
        if (!mapLoading.classList.contains('hidden')) {
          mapLoading.classList.add('hidden');
        }
      }, 3000);
    }
    
    // Prevent the interactive map initialization from overriding Google Map
    const propertyMap = document.getElementById('property-map');
    if (propertyMap) {
      // Skip the initializeMap function from app.js
      // by defining an empty function with the same name
      window.initializeMap = function() {
        console.log('Google Maps iframe is being used instead of Leaflet map');
      };
    }
  });
</script>

<?php
require_once 'includes/footer.php';
?>
