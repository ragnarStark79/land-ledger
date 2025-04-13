<?php
// Include header
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Land Ledger - Property Records & Tax Portal</title>
  <meta name="description" content="Access land records and manage property taxes efficiently through our digital portal" />
  <meta name="author" content="Land Ledger" />

  <meta property="og:title" content="Land Ledger - Property Records & Tax Portal" />
  <meta property="og:description" content="Access land records and manage property taxes efficiently through our digital portal" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@lovable_dev" />
  <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="dist/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'gov': {
              100: '#e9ecf6',
              500: '#3b5998',
              600: '#344e86',
              700: '#2d4373',
              800: '#263961',
              900: '#1e2e4f'
            },
            'earth': {
              100: '#e6f5e6',
              400: '#66cc66',
              500: '#4caf50',
              600: '#43a047',
              700: '#388e3c',
              800: '#2e7d32',
              900: '#1b5e20'
            },
            'gold': {
              100: '#fff8e1',
              700: '#ffb300'
            },
            'primary': '#3b5998',
            'secondary': '#4caf50',
            'accent': '#ffc107',
            'foreground': '#333333',
            'background': '#f5f7fa',
            'muted': '#f0f2f5',
            'border': '#e4e6eb',
            'input': '#e4e6eb'
          },
          fontFamily: {
            'sans': ['Inter', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style type="text/css">
    /* Custom styles */
    html {
      scroll-behavior: smooth;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      color: #333333;
      background-color: #f5f7fa;
    }
    
    .container-custom {
      width: 100%;
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 1rem;
      padding-right: 1rem;
    }
    
    @media (min-width: 640px) {
      .container-custom {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }
    }
    
    @media (min-width: 1024px) {
      .container-custom {
        padding-left: 2rem;
        padding-right: 2rem;
      }
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 0.375rem;
      font-size: 0.875rem;
      font-weight: 500;
      padding: 0.5rem 1rem;
      height: 2.5rem;
      transition-property: color, background-color, border-color;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
    }
    
    .btn-primary {
      background-color: #3b5998;
      color: white;
    }
    
    .btn-primary:hover {
      background-color: #344e86;
    }
    
    .btn-secondary {
      background-color: #4caf50;
      color: white;
    }
    
    .btn-secondary:hover {
      background-color: #43a047;
    }
    
    .btn-outline {
      border: 1px solid #e4e6eb;
      background-color: transparent;
    }
    
    .btn-outline:hover {
      background-color: #ffc107;
      color: #333333;
    }
    
    .feature-card {
      border-radius: 0.5rem;
      border: 1px solid #e4e6eb;
      background-color: white;
      padding: 1.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 200ms;
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .section {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
    
    @media (min-width: 768px) {
      .section {
        padding-top: 4rem;
        padding-bottom: 4rem;
      }
    }
    
    @media (min-width: 1024px) {
      .section {
        padding-top: 6rem;
        padding-bottom: 6rem;
      }
    }
    
    .gradient-heading {
      background-image: linear-gradient(to right, #2d4373, #388e3c);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    
    .input {
      display: flex;
      height: 2.5rem;
      width: 100%;
      border-radius: 0.375rem;
      border: 1px solid #e4e6eb;
      background-color: white;
      padding: 0.5rem 0.75rem;
      font-size: 0.875rem;
    }
    
    .input:focus {
      outline: 2px solid #3b5998;
      outline-offset: 2px;
    }
    
    .card {
      border-radius: 0.5rem;
      border: 1px solid #e4e6eb;
      background-color: white;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 200ms;
    }
    
    .card:hover {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .animate-fadeIn {
      animation: fadeIn 1s ease-out forwards;
    }
    
    .animate-slideUp {
      animation: slideUp 1s ease-out forwards;
    }
    
    .animate-pulse {
      animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
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
    
    @keyframes pulse {
      0%, 100% {
        opacity: 1;
      }
      50% {
        opacity: .7;
      }
    }

    /* Add animation styles */
    .animate-pop {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-pop.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
  
  <!-- IMPORTANT: DO NOT REMOVE THIS SCRIPT TAG OR THIS VERY COMMENT! -->
  <script src="https://cdn.gpteng.co/gptengineer.js" type="module"></script>
</head>

<body class="min-h-screen bg-gradient-to-b from-background to-muted">
        
        <!-- Mobile Menu -->
        

    <main>
      <!-- Hero Section -->
      <section id="home" class="relative overflow-hidden animate-pop">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-earth-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10 py-20 md:py-28 lg:py-32">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="space-y-6 animate-fadeIn">
              <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-accent/20 text-accent-foreground">
                Modern Land Management
              </span>
              <h1 class="gradient-heading text-4xl md:text-5xl font-bold">
                Accessible Land Records & <br />Property Tax Management
              </h1>
              <p class="text-lg text-gray-600">
                Simplifying access to land records and making property tax payments easier, more transparent, and efficient for all citizens.
              </p>
              <div class="flex flex-wrap gap-4 pt-2">
                <a href="property-records.php" class="btn btn-primary">
                  <i class="fa-solid fa-compass mr-2"></i>
                  Explore Records
                </a>
                <a href="property-tax.php" class="btn btn-secondary">
                  <i class="fa-solid fa-receipt mr-2"></i>
                  Pay Taxes
                </a>
              </div>
              <div class="flex items-center space-x-6 pt-4">
                <div class="flex -space-x-2">
                  <div class="w-8 h-8 rounded-full bg-muted border-2 border-white">
                    <div class="w-full h-full rounded-full bg-gradient-to-r from-earth-400 to-gov-500"></div>
                  </div>
                  <div class="w-8 h-8 rounded-full bg-muted border-2 border-white">
                    <div class="w-full h-full rounded-full bg-gradient-to-r from-earth-400 to-gov-500"></div>
                  </div>
                  <div class="w-8 h-8 rounded-full bg-muted border-2 border-white">
                    <div class="w-full h-full rounded-full bg-gradient-to-r from-earth-400 to-gov-500"></div>
                  </div>
                  <div class="w-8 h-8 rounded-full bg-muted border-2 border-white">
                    <div class="w-full h-full rounded-full bg-gradient-to-r from-earth-400 to-gov-500"></div>
                  </div>
                </div>
                <p class="text-sm text-gray-500">
                  <span class="font-bold text-foreground">10,000+</span> citizens served this month
                </p>
              </div>
            </div>
            
            <div class="relative animate-slideUp">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-gov-500 to-earth-500 rounded-2xl blur opacity-30 animate-pulse"></div>
              <div class="relative bg-white p-6 rounded-2xl shadow-lg">
                <div class="bg-muted rounded-lg p-4 mb-5">
                  <h3 class="text-lg font-medium mb-2">Quick Access</h3>
                  <div class="grid grid-cols-2 gap-3">
                    <a href="property-records.php" class="btn btn-outline w-full text-sm py-4 h-auto">
                      <i class="fa-solid fa-file-lines text-lg block mb-1"></i>
                      Land Records
                    </a>
                    <a href="property-tax.php" class="btn btn-outline w-full text-sm py-4 h-auto">
                      <i class="fa-solid fa-landmark text-lg block mb-1"></i>
                      Property Tax
                    </a>
                    <a href="maps-surveys.php" class="btn btn-outline w-full text-sm py-4 h-auto">
                      <i class="fa-solid fa-map-location-dot text-lg block mb-1"></i>
                      Maps & Surveys
                    </a>
                    <a href="tax-forms.php" class="btn btn-outline w-full text-sm py-4 h-auto">
                      <i class="fa-solid fa-certificate text-lg block mb-1"></i>
                      Certificates
                    </a>
                  </div>
                </div>
                <div class="space-y-3">
                  <div class="flex items-center p-3 border rounded-lg">
                    <div class="h-10 w-10 bg-gov-100 text-gov-700 rounded-full flex items-center justify-center mr-3">
                      <i class="fa-solid fa-bell-concierge"></i>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium">Express Services</h4>
                      <p class="text-xs text-gray-500">Fast-track processing available</p>
                    </div>
                  </div>
                  <div class="flex items-center p-3 border rounded-lg">
                    <div class="h-10 w-10 bg-earth-100 text-earth-700 rounded-full flex items-center justify-center mr-3">
                      <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium">Mobile Access</h4>
                      <p class="text-xs text-gray-500">Records on your smartphone</p>
                    </div>
                  </div>
                  <div class="flex items-center p-3 border rounded-lg">
                    <div class="h-10 w-10 bg-gold-100 text-gold-700 rounded-full flex items-center justify-center mr-3">
                      <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                      <h4 class="text-sm font-medium">Secure Transactions</h4>
                      <p class="text-xs text-gray-500">End-to-end encryption</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="absolute bottom-0 w-full h-20 bg-gradient-to-t from-background to-transparent"></div>
      </section>
      
      <!-- Services Section -->
      <section id="services" class="section bg-white animate-pop">
        <div class="container-custom">
          <div class="text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
              Our Services
            </span>
            <h2 class="gradient-heading text-3xl md:text-4xl mb-4">Comprehensive Land Management Solutions</h2>
            <p class="text-gray-600 mx-auto max-w-2xl">
              Our integrated platform offers a wide range of services designed to streamline access to land records
              and simplify property tax management for all citizens.
            </p>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-file-contract text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Land Records</h3>
              <p class="text-gray-600 mb-4">
                Access, search, and download digitized land records, property deeds, and ownership certificates.
              </p>
              
            </div>
            
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-hand-holding-dollar text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Property Tax</h3>
              <p class="text-gray-600 mb-4">
                Calculate, view, and pay your property taxes online with multiple payment options and instant receipts.
              </p>
              
            </div>
            
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-map text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Maps & Surveys</h3>
              <p class="text-gray-600 mb-4">
                View detailed land maps, survey reports, boundary information, and geographic data.
              </p>
              
            </div>
            
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-clipboard-check text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Compliance Tools</h3>
              <p class="text-gray-600 mb-4">
                Stay compliant with property regulations, zoning laws, and tax requirements with our automated tools.
              </p>
              
            </div>
            
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-bell text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Notifications</h3>
              <p class="text-gray-600 mb-4">
                Receive timely alerts for tax due dates, policy updates, and important land record changes.
              </p>
              
            </div>
            
            <div class="feature-card">
              <div class="h-12 w-12 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mb-4">
                <i class="fa-solid fa-headset text-xl"></i>
              </div>
              <h3 class="text-lg font-medium mb-2">Support & Assistance</h3>
              <p class="text-gray-600 mb-4">
                Get help from our dedicated support team for any questions related to land records or property taxes.
              </p>
              
            </div>
          </div>
        </div>
      </section>
      
      <!-- Records Section -->
      <section id="records" class="section bg-muted animate-pop">
        <div class="container-custom">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                Land Records
              </span>
              <h2 class="gradient-heading text-3xl md:text-4xl mb-4">Access Your Land Records With Ease</h2>
              <p class="text-gray-600 mb-6">
                Our digitized database provides instant access to your property documents, ownership certificates, 
                and land details. Search by various parameters to quickly find what you need.
              </p>
              
              <div class="space-y-4 mb-8">
                <div class="flex items-start">
                  <div class="h-6 w-6 rounded-full bg-green-100 text-green-700 flex items-center justify-center mt-0.5 mr-3">
                    <i class="fa-solid fa-check text-sm"></i>
                  </div>
                  <div>
                    <h4 class="font-medium">Digital Access</h4>
                    <p class="text-sm text-gray-500">Access your records anytime, anywhere</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="h-6 w-6 rounded-full bg-green-100 text-green-700 flex items-center justify-center mt-0.5 mr-3">
                    <i class="fa-solid fa-check text-sm"></i>
                  </div>
                  <div>
                    <h4 class="font-medium">Verified Documents</h4>
                    <p class="text-sm text-gray-500">Digitally signed and legally valid</p>
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="h-6 w-6 rounded-full bg-green-100 text-green-700 flex items-center justify-center mt-0.5 mr-3">
                    <i class="fa-solid fa-check text-sm"></i>
                  </div>
                  <div>
                    <h4 class="font-medium">Historical Data</h4>
                    <p class="text-sm text-gray-500">View property history and transaction records</p>
                  </div>
                </div>
              </div>
              
              <button class="btn btn-primary" onclick="window.location.href='search-records.php';">
                <i class="fa-solid fa-search mr-2"></i>
                Search Records
              </button>
            </div>
            
            <div class="relative">
              <div class="absolute -inset-1 bg-gradient-to-r from-gov-500 to-earth-500 rounded-2xl blur opacity-30"></div>
              <div class="relative bg-white p-6 rounded-2xl shadow-xl">
                <h3 class="text-lg font-medium mb-4">Property Record Search</h3>
                <form class="space-y-4" action="records.php" method="GET">
                  <div>
                    <label for="search-type" class="block text-sm font-medium mb-1">Search By</label>
                    <select id="search-type" name="search_type" class="input w-full">
                      <option value="property_id">Property ID</option>
                      <option value="owner_name">Owner Name</option>
                      <option value="address">Address</option>
                      <option value="survey_number">Survey Number</option>
                    </select>
                  </div>
                  <div>
                    <label for="search-value" class="block text-sm font-medium mb-1">Enter Details</label>
                    <input type="text" id="search-value" name="search_value" placeholder="e.g., ABC12345 or John Doe" class="input w-full" />
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <label for="district" class="block text-sm font-medium mb-1">District</label>
                      <select id="district" name="district" class="input w-full">
                        <option value="all">All Districts</option>
                        <option value="north">North District</option>
                        <option value="south">South District</option>
                        <option value="east">East District</option>
                        <option value="west">West District</option>
                      </select>
                    </div>
                    <div>
                      <label for="property-type" class="block text-sm font-medium mb-1">Property Type</label>
                      <select id="property-type" name="property_type" class="input w-full">
                        <option value="all">All Types</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="agricultural">Agricultural</option>
                        <option value="industrial">Industrial</option>
                      </select>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary w-full" onclick="window.location.href='search-records.php';">
                    Search Records
                  </button>
                  <p class="text-xs text-gray-500 text-center">
                    Use advanced filters for more specific search
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Tax Section -->
      <section id="taxes" class="section bg-white animate-pop">
        <div class="container-custom">
          <div class="text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
              Property Taxes
            </span>
            <h2 class="gradient-heading text-3xl md:text-4xl mb-4">Simple & Transparent Tax Management</h2>
            <p class="text-gray-600 mx-auto max-w-2xl">
              Our efficient property tax system helps you calculate, view, and pay your taxes securely online
              without the hassle of visiting government offices.
            </p>
          </div>
          
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <div class="card p-6 bg-gradient-to-br from-white to-muted border-0">
              <div class="h-14 w-14 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mb-6">
                <i class="fa-solid fa-calculator text-2xl"></i>
              </div>
              <h3 class="text-xl font-medium mb-3">Tax Calculator</h3>
              <p class="text-gray-600 mb-6">
                Estimate your property taxes based on current rates, property value, and applicable exemptions.
              </p>
              <a href="taxes.php" class="btn btn-outline w-full">Calculate Now</a>
            </div>
            
            <div class="card p-6 bg-gradient-to-br from-white to-muted border-0 transform scale-105 shadow-lg">
              <div class="absolute top-3 right-3">
                <span class="bg-accent text-accent-foreground text-xs py-1 px-2 rounded-full font-medium">Popular</span>
              </div>
              <div class="h-14 w-14 rounded-full bg-primary text-white flex items-center justify-center mb-6">
                <i class="fa-solid fa-credit-card text-2xl"></i>
              </div>
              <h3 class="text-xl font-medium mb-3">Pay Online</h3>
              <p class="text-gray-600 mb-6">
                Pay your property taxes securely using multiple payment methods with instant receipt generation.
              </p>
              <a href="taxes.php" class="btn btn-primary w-full">Pay Taxes</a>
            </div>
            
            <div class="card p-6 bg-gradient-to-br from-white to-muted border-0">
              <div class="h-14 w-14 rounded-full bg-earth-100 text-earth-700 flex items-center justify-center mb-6">
                <i class="fa-solid fa-history text-2xl"></i>
              </div>
              <h3 class="text-xl font-medium mb-3">Payment History</h3>
              <p class="text-gray-600 mb-6">
                View your complete payment history, download receipts, and access tax certificates.
              </p>
              <a href="payment-history.php" class="btn btn-outline w-full">View History</a>
            </div>
          </div>
          
          <div class="bg-muted rounded-2xl p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
              <div class="bg-white rounded-xl p-5 shadow-sm">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Current Tax Rate</h4>
                <div class="flex items-baseline">
                  <span class="text-2xl font-bold">2.5</span>
                  <span class="text-gray-500 ml-1">%</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Residential properties</p>
              </div>
              
              <div class="bg-white rounded-xl p-5 shadow-sm">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Early Payment Discount</h4>
                <div class="flex items-baseline">
                  <span class="text-2xl font-bold">5</span>
                  <span class="text-gray-500 ml-1">%</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Until March 31st</p>
              </div>
              
              <div class="bg-white rounded-xl p-5 shadow-sm">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Late Payment Fee</h4>
                <div class="flex items-baseline">
                  <span class="text-2xl font-bold">1.2</span>
                  <span class="text-gray-500 ml-1">%</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Per month after due date</p>
              </div>
              
              <div class="bg-white rounded-xl p-5 shadow-sm">
                <h4 class="text-sm font-medium text-gray-500 mb-2">Next Due Date</h4>
                <div class="flex items-baseline">
                  <span class="text-2xl font-bold">June 30</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Financial Year 2024-25</p>
              </div>
            </div>
            
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
              <p class="text-sm text-gray-500 mb-4 sm:mb-0">
                <i class="fa-solid fa-circle-info mr-1 text-gov-700"></i>
                Tax rates may vary based on property type, location, and usage
              </p>
              <a href="terms.php" class="text-primary font-medium hover:underline inline-flex items-center">
                View complete tax policy
                <i class="fa-solid fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Stats Section -->
      <section class="py-14 bg-gradient-to-r from-gov-900 to-earth-900 text-white animate-pop">
        <div class="container-custom">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="p-6">
              <div class="text-4xl font-bold mb-2 counter" data-target="250000">0</div>
              <p class="text-gray-300">Digital Records</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-2 counter" data-target="98">0%</div>
              <p class="text-gray-300">Processing Accuracy</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-2 counter" data-target="15000000">0</div>
              <p class="text-gray-300">Online Transactions</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-2 counter" data-target="24">0/7</div>
              <p class="text-gray-300">System Availability</p>
            </div>
          </div>
        </div>
      </section>

      <script>
        // Function to animate counters
        const animateCounters = () => {
          const counters = document.querySelectorAll('.counter');
          const duration = 2000; // Total duration for all counters to complete (in ms)
          const startTime = performance.now();

          const updateCounters = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1); // Ensure progress does not exceed 1

            counters.forEach(counter => {
              const target = +counter.getAttribute('data-target');
              const isPercentage = counter.innerText.includes('%');
              const is24_7 = counter.innerText.includes('/7');
              const value = Math.floor(target * progress);

              if (isPercentage) {
                counter.innerText = `${value}%`;
              } else if (is24_7) {
                counter.innerText = `${value}/7`;
              } else {
                counter.innerText = value.toLocaleString();
              }
            });

            if (progress < 1) {
              requestAnimationFrame(updateCounters);
            }
          };

          requestAnimationFrame(updateCounters);
        };

        // Trigger animation when the section is in view
        const observer = new IntersectionObserver(
          entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect(); // Run animation only once
              }
            });
          },
          { threshold: 0.5 } // Adjust threshold as needed
        );

        const statsSection = document.querySelector('.py-14.bg-gradient-to-r');
        if (statsSection) {
          observer.observe(statsSection);
        }

        // Function to add pop-in animation on scroll
        const animatePopOnScroll = () => {
          const elements = document.querySelectorAll('.animate-pop');
          elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.2;

            if (elementPosition < screenPosition) {
              element.classList.add('visible');
            }
          });
        };

        // Add event listeners for scroll and load
        window.addEventListener('scroll', animatePopOnScroll);
        window.addEventListener('load', animatePopOnScroll);
      </script>
      
      <!-- FAQ Section -->
      <section class="section bg-muted animate-pop">
        <div class="container-custom">
          <div class="text-center mb-16">
            <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
              FAQs
            </span>
            <h2 class="gradient-heading text-3xl md:text-4xl mb-4">Frequently Asked Questions</h2>
            <p class="text-gray-600 mx-auto max-w-2xl">
              Find answers to common questions about our land records and property tax management system.
            </p>
          </div>
          
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-8 max-w-4xl mx-auto">
            <div>
              <h3 class="text-lg font-medium mb-2">How do I access my land records?</h3>
              <p class="text-gray-600">
                You can access your land records by logging into your account and navigating to the Records section.
                Search using your property ID, owner name, or address to find your documents.
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium mb-2">Are online payments secure?</h3>
              <p class="text-gray-600">
                Yes, all online payments are processed through a secure payment gateway with end-to-end encryption.
                We comply with the highest security standards to protect your financial information.
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium mb-2">How are property taxes calculated?</h3>
              <p class="text-gray-600">
                Property taxes are calculated based on the assessed value of your property, the applicable tax rate
                for your property type and location, minus any exemptions you qualify for.
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium mb-2">What if I find errors in my records?</h3>
              <p class="text-gray-600">
                If you find any errors in your land records, you can submit a correction request through our portal.
                Our team will review your request and make necessary corrections after verification.
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium mb-2">What payment methods are accepted?</h3>
              <p class="text-gray-600">
                We accept multiple payment methods including credit/debit cards, net banking, UPI, and mobile wallets.
                All major payment providers are supported on our platform.
              </p>
            </div>
            
            <div>
              <h3 class="text-lg font-medium mb-2">How do I get help with technical issues?</h3>
              <p class="text-gray-600">
                For technical support, you can reach our help desk through the Contact section or call our toll-free
                number. Our support team is available Monday to Saturday, 8 AM to 8 PM.
              </p>
            </div>
          </div>
          
          <div class="text-center mt-12">
            <a href="#contact" class="text-primary font-medium hover:underline inline-flex items-center">
              Have more questions? Contact us
              <i class="fa-solid fa-arrow-right ml-1"></i>
            </a>
          </div>
        </div>
      </section>
      
      <!-- Contact Section -->
      <section id="contact" class="section bg-white animate-pop">
        <div class="container-custom">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
              <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                Contact Us
              </span>
              <h2 class="gradient-heading text-3xl md:text-4xl mb-4">Get In Touch With Our Team</h2>
              <p class="text-gray-600 mb-6">
                Have questions about land records or property taxes? Our dedicated team is here to help
                you with prompt assistance and expert guidance.
              </p>
              
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
              <div class="bg-muted p-6 rounded-xl">
                <h3 class="text-xl font-medium mb-4">Send Us a Message</h3>
                <form class="space-y-4" action="contact.php" method="POST">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
                      <input type="text" id="name" name="name" class="input w-full" placeholder="John Doe" required />
                    </div>
                    <div>
                      <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                      <input type="email" id="email" name="email" class="input w-full" placeholder="john@example.com" required />
                    </div>
                  </div>
                  <div>
                    <label for="subject" class="block text-sm font-medium mb-1">Subject</label>
                    <select id="subject" name="subject" class="input w-full" required>
                      <option value="">Select a subject</option>
                      <option value="Land Records Inquiry">Land Records Inquiry</option>
                      <option value="Property Tax Question">Property Tax Question</option>
                      <option value="Technical Support">Technical Support</option>
                      <option value="Feedback">Feedback</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div>
                    <label for="message" class="block text-sm font-medium mb-1">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="input w-full" placeholder="Please describe your query in detail..." required></textarea>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" required />
                    <label for="terms" class="ml-2 block text-sm text-gray-500">
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
    </main>
    
   
  
  <script>
    

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
        }

        // Close mobile menu when clicking a link
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
        }
      });
    });

    // Add animation classes on scroll
    const animateOnScroll = () => {
      const elements = document.querySelectorAll('.feature-card, .card');
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (elementPosition < screenPosition) {
          element.classList.add('animate-fadeIn');
        }
      });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    // Run once on page load
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>
<?php
// Include footer
include 'includes/footer.php';
?>
