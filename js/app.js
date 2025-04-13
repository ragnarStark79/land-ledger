document.addEventListener('DOMContentLoaded', function() {
    // User dropdown menu
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userMenu = document.getElementById('userMenu');
    
    if (userMenuBtn && userMenu) {
      userMenuBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        userMenu.classList.toggle('hidden');
      });
      
      // Close the dropdown when clicking elsewhere
      document.addEventListener('click', function() {
        if (!userMenu.classList.contains('hidden')) {
          userMenu.classList.add('hidden');
        }
      });
      
      // Prevent closing when clicking inside dropdown
      userMenu.addEventListener('click', function(e) {
        e.stopPropagation();
      });
    }
    
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', function() {
        if (mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.remove('hidden');
        } else {
          mobileMenu.classList.add('hidden');
        }
      });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1); // Remove '#' from href
        if (targetId) { // Ensure targetId is not empty
          const target = document.getElementById(targetId); // Use getElementById instead
          if (target) {
            window.scrollTo({
              top: target.offsetTop - 80,
              behavior: 'smooth'
            });
          }
        }
      });
    });
    
    // Add animation classes on scroll
    if (typeof animateOnScroll === 'undefined') {
      const animateOnScroll = () => {
        const elements = document.querySelectorAll('.feature-card, .card, .animate-on-scroll');
        elements.forEach(element => {
          const elementPosition = element.getBoundingClientRect().top;
          const screenPosition = window.innerHeight / 1.3;

          if (elementPosition < screenPosition) {
            if (element.classList.contains('animate-fadeIn-scroll')) {
              element.classList.add('animate-fadeIn');
            } else if (element.classList.contains('animate-slideUp-scroll')) {
              element.classList.add('animate-slideUp');
            } else if (element.classList.contains('animate-slideLeft-scroll')) {
              element.classList.add('animate-slideLeft');
            } else if (element.classList.contains('animate-slideRight-scroll')) {
              element.classList.add('animate-slideRight');
            } else {
              element.classList.add('animate-fadeIn');
            }
          }
        });
      };

      window.addEventListener('scroll', animateOnScroll);
      // Run once on page load
      window.addEventListener('load', animateOnScroll);
    }

    // Payment form validation for credit card
    const cardNumberInput = document.getElementById('card-number');
    const expiryDateInput = document.getElementById('expiry-date');
    const cvvInput = document.getElementById('cvv');
    const accountNumberInput = document.getElementById('account-number');

    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '').substr(0, 16);
            e.target.value = value.replace(/(.{4})/g, '$1 ').trim();
        });
    }

    if (expiryDateInput) {
        expiryDateInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '').substr(0, 4);
            e.target.value = value.length > 2 ? value.substr(0, 2) + '/' + value.substr(2) : value;
        });
    }

    if (cvvInput) {
        cvvInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '').substr(0, 4);
        });
    }

    if (accountNumberInput) {
        accountNumberInput.addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '').substr(0, 20);
        });
    }

    // FAQ Toggles
    const faqButtons = document.querySelectorAll('.faq-button');
    if (faqButtons.length > 0) {
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                answer.classList.toggle('hidden');
                this.querySelector('.fa-chevron-down').classList.toggle('rotate-180');
            });
        });
    }

    // Interactive Map - Modified to check for Google Maps iframe first
    const propertyMap = document.getElementById('property-map');
    if (propertyMap) {
        // Check if we're on the maps-surveys page with Google Maps iframe
        const googleMapIframe = document.getElementById('google-map-iframe');
        
        // Only initialize Leaflet map if there's no Google Maps iframe
        if (!googleMapIframe) {
            setTimeout(() => initializeMap(), 500);
        } else {
            console.log('Google Maps iframe detected. Skipping Leaflet map initialization.');
        }
    }

    function initializeMap() {
        const mapLoading = document.getElementById('map-loading');
        if (mapLoading) mapLoading.remove();

        if (typeof L === 'undefined') {
            loadLeaflet().then(createMap).catch(showMapError);
        } else {
            createMap();
        }
    }

    function loadLeaflet() {
        return new Promise((resolve, reject) => {
            const cssLink = document.createElement('link');
            cssLink.rel = 'stylesheet';
            cssLink.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
            document.head.appendChild(cssLink);

            const script = document.createElement('script');
            script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
            script.onload = resolve;
            script.onerror = reject;
            document.head.appendChild(script);
        });
    }

    function createMap() {
        const map = L.map('property-map').setView([37.7749, -122.4194], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const properties = [
            { id: 1, type: 'residential', name: 'Residential Property 1', address: '123 Main Street', latlng: [37.775, -122.419], color: '#ff5733' },
            { id: 2, type: 'commercial', name: 'Commercial Building A', address: '456 Market Street', latlng: [37.779, -122.415], color: '#33a8ff' },
            { id: 3, type: 'agricultural', name: 'Farmland Plot', address: '789 Rural Road', latlng: [37.769, -122.425], color: '#33ff57' },
            { id: 4, type: 'residential', name: 'Residential Property 2', address: '321 Oak Avenue', latlng: [37.773, -122.410], color: '#ff5733' }
        ];

        const markers = L.layerGroup().addTo(map);
        properties.forEach(property => {
            const marker = L.circleMarker(property.latlng, {
                radius: 10,
                fillColor: property.color,
                color: '#fff',
                weight: 2,
                opacity: 1,
                fillOpacity: 0.8,
                className: `property-marker ${property.type}`
            });
            marker.bindPopup(`
                <div class="property-popup">
                    <h3 class="font-semibold text-lg">${property.name}</h3>
                    <p class="text-gray-600">${property.address}</p>
                    <p class="text-sm text-gray-500 mt-2">Property ID: ${property.id}</p>
                    <a href="#" class="text-primary font-medium hover:underline mt-2 block">View Details</a>
                </div>
            `);
            marker.addTo(markers);
        });

        const mapFilterButtons = document.querySelectorAll('.map-filter-btn');
        if (mapFilterButtons.length > 0) {
            mapFilterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    mapFilterButtons.forEach(btn => btn.classList.replace('btn-secondary', 'btn-outline'));
                    this.classList.replace('btn-outline', 'btn-secondary');

                    const filter = this.getAttribute('data-filter');
                    markers.clearLayers();
                    properties.forEach(property => {
                        if (filter === 'all' || property.type === filter) {
                            const marker = L.circleMarker(property.latlng, {
                                radius: 10,
                                fillColor: property.color,
                                color: '#fff',
                                weight: 2,
                                opacity: 1,
                                fillOpacity: 0.8,
                                className: `property-marker ${property.type}`
                            });
                            marker.bindPopup(`
                                <div class="property-popup">
                                    <h3 class="font-semibold text-lg">${property.name}</h3>
                                    <p class="text-gray-600">${property.address}</p>
                                    <p class="text-sm text-gray-500 mt-2">Property ID: ${property.id}</p>
                                    <a href="#" class="text-primary font-medium hover:underline mt-2 block">View Details</a>
                                </div>
                            `);
                            marker.addTo(markers);
                        }
                    });
                });
            });
        }
    }

    function showMapError() {
        if (propertyMap) {
            propertyMap.innerHTML = `
                <div class="flex flex-col items-center justify-center p-6 h-full">
                    <i class="fa-solid fa-map-marked-alt text-4xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Map Could Not Be Loaded</h3>
                    <p class="text-gray-600 text-center">There was an issue loading the map. Please try again later.</p>
                </div>
            `;
        }
    }
});
