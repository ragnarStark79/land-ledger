<?php
$current_page = basename($_SERVER['PHP_SELF']);
require_once 'includes/auth.php';
$isLoggedIn = isLoggedIn();
$currentUser = $isLoggedIn ? getCurrentUser() : null;
$profilePictureUrl = "https://c4.wallpaperflare.com/wallpaper/994/815/596/vikings-vikings-tv-series-ragnar-lodbrok-travis-fimmel-wallpaper-preview.jpg"; // Default profile picture URL
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
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="min-h-screen bg-gradient-to-b from-background to-muted">
  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="container-custom">
      <div class="flex items-center justify-between py-4">
        <div class="flex items-center space-x-2">
          <a href="index.php" class="flex items-center space-x-2">
            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-gov-600 to-earth-600 flex items-center justify-center">
              <span class="text-white font-bold text-xl">LL</span>
            </div>
            <h1 class="text-xl font-bold">Land Ledger</h1>
          </a>
        </div>
        
        <nav class="hidden md:flex items-center space-x-6">
          <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Home</a>
          
          <?php if ($isLoggedIn): ?>
            <a href="property-records.php" class="<?php echo $current_page == 'property-records.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Records</a>
            <a href="property-tax.php" class="<?php echo $current_page == 'property-tax.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Taxes</a>
            <a href="maps-surveys.php" class="<?php echo $current_page == 'maps-surveys.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Maps & Surveys</a>
            <a href="pay-tax.php" class="<?php echo $current_page == 'pay-tax.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Pay Tax</a>
          <?php else: ?>
            <a href="login.php?redirect=property-records.php" class="text-foreground hover:text-primary font-medium transition-colors">Records</a>
            <a href="login.php?redirect=property-tax.php" class="text-foreground hover:text-primary font-medium transition-colors">Taxes</a>
            <a href="login.php?redirect=maps-surveys.php" class="text-foreground hover:text-primary font-medium transition-colors">Maps & Surveys</a>
            <a href="login.php?redirect=pay-tax.php" class="text-foreground hover:text-primary font-medium transition-colors">Pay Tax</a>
          <?php endif; ?>
          
          <a href="help-center.php" class="<?php echo $current_page == 'help-center.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Help</a>
          <a href="contact-us.php" class="<?php echo $current_page == 'contact-us.php' ? 'text-primary' : 'text-foreground hover:text-primary'; ?> font-medium transition-colors">Contact</a>
        </nav>
        
        <div class="flex items-center space-x-3">
          <?php if ($isLoggedIn): ?>
            <div class="relative" id="userDropdown">
              <button class="btn btn-primary flex items-center space-x-2 px-2 py-1 text-sm md:h-10 md:px-4 md:py-2" id="userMenuBtn">
                <?php if (!empty($profilePictureUrl)): ?>
                  <img src="<?php echo htmlspecialchars($profilePictureUrl); ?>" alt="Profile Picture" class="h-6 w-6 rounded-full md:h-8 md:w-8">
                <?php else: ?>
                  <i class="fa-solid fa-user-circle text-xl"></i>
                <?php endif; ?>
                <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
              </button>
              <div id="userMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden animate-slideUp">
                <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i class="fa-solid fa-user-circle mr-2"></i> Profile
                </a>
                <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i class="fa-solid fa-tachometer-alt mr-2"></i> Dashboard
                </a>
                <a href="settings.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <i class="fa-solid fa-cog mr-2"></i> Settings
                </a>
                <div class="border-t border-gray-100 my-1"></div>
                <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                  <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                </a>
              </div>
            </div>
          <?php else: ?>
            <a href="login.php" class="btn btn-primary">
              <i class="fa-solid fa-right-to-bracket mr-2"></i>
              Login
            </a>
          <?php endif; ?>
          
          <button id="mobileMenuBtn" class="md:hidden text-foreground">
            <i class="fa-solid fa-bars text-xl"></i>
          </button>
        </div>
      </div>
      
      <!-- Mobile Menu -->
      <div id="mobileMenu" class="md:hidden hidden py-4 border-t border-gray-200">
        <nav class="flex flex-col space-y-3">
          <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Home</a>
          
          <?php if ($isLoggedIn): ?>
            <a href="property-records.php" class="<?php echo $current_page == 'property-records.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Records</a>
            <a href="property-tax.php" class="<?php echo $current_page == 'property-tax.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Taxes</a>
            <a href="maps-surveys.php" class="<?php echo $current_page == 'maps-surveys.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Maps & Surveys</a>
            <a href="pay-tax.php" class="<?php echo $current_page == 'pay-tax.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Pay Tax</a>
          <?php else: ?>
            <a href="login.php?redirect=property-records.php" class="text-foreground hover:text-primary font-medium transition-colors">Records</a>
            <a href="login.php?redirect=property-tax.php" class="text-foreground hover:text-primary font-medium transition-colors">Taxes</a>
            <a href="login.php?redirect=maps-surveys.php" class="text-foreground hover:text-primary font-medium transition-colors">Maps & Surveys</a>
            <a href="login.php?redirect=pay-tax.php" class="text-foreground hover:text-primary font-medium transition-colors">Pay Tax</a>
          <?php endif; ?>
          
          <a href="help-center.php" class="<?php echo $current_page == 'help-center.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Help</a>
          <a href="contact-us.php" class="<?php echo $current_page == 'contact-us.php' ? 'text-primary' : 'text-foreground'; ?> hover:text-primary font-medium transition-colors">Contact</a>
          
          <?php if ($isLoggedIn): ?>
            <div class="border-t border-gray-100 pt-2 mt-2">
              <a href="profile.php" class="block py-2 text-foreground hover:text-primary font-medium transition-colors">Profile</a>
              <a href="dashboard.php" class="block py-2 text-foreground hover:text-primary font-medium transition-colors">Dashboard</a>
              <a href="settings.php" class="block py-2 text-foreground hover:text-primary font-medium transition-colors">Settings</a>
              <a href="logout.php" class="block py-2 text-red-600 hover:text-red-700 font-medium transition-colors">Logout</a>
            </div>
          <?php endif; ?>
        </nav>
      </div>
    </div>
  </header>
</body>
</html>
