
<?php
// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-soil-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">System Status</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Check the current operational status of Land Ledger services and view any ongoing maintenance or incidents.
                </p>
                
                <div class="inline-flex items-center bg-white rounded-full px-4 py-2 shadow-md animate-slideUp-scroll" style="animation-delay: 0.2s;">
                    <div class="h-3 w-3 rounded-full bg-green-500 mr-2 pulse"></div>
                    <span class="font-medium">All Systems Operational</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Status Section -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Real-Time
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Current Service Status</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    View the real-time status of all Land Ledger services and components
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-green-500 animate-fadeIn-scroll">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-server"></i>
                            </div>
                            <h3 class="font-medium">Core Application</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-green-600 font-medium">Operational</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>99.99% uptime this month</span>
                    </div>
                </div>
                
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-green-500 animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h3 class="font-medium">Database Services</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-green-600 font-medium">Operational</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>99.95% uptime this month</span>
                    </div>
                </div>
                
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-green-500 animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <h3 class="font-medium">Payment Services</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-green-600 font-medium">Operational</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>100% uptime this month</span>
                    </div>
                </div>
                
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-yellow-500 animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-map"></i>
                            </div>
                            <h3 class="font-medium">Map Services</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-yellow-500 mr-2"></div>
                            <span class="text-yellow-600 font-medium">Degraded Performance</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>97.5% uptime this month</span>
                    </div>
                    <div class="mt-2 text-sm text-yellow-600 bg-yellow-50 p-3 rounded">
                        <p><strong>Ongoing incident:</strong> Some users may experience slower loading times for map visualizations. Our team is working to resolve this issue.</p>
                    </div>
                </div>
                
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-green-500 animate-fadeIn-scroll" style="animation-delay: 0.4s;">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h3 class="font-medium">Notification Services</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-green-600 font-medium">Operational</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>99.9% uptime this month</span>
                    </div>
                </div>
                
                <!-- Service Status Item -->
                <div class="card p-5 border-l-4 border-green-500 animate-fadeIn-scroll" style="animation-delay: 0.5s;">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-user-shield"></i>
                            </div>
                            <h3 class="font-medium">Authentication Services</h3>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-green-600 font-medium">Operational</span>
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600 flex items-center">
                        <span>Last checked: 2 minutes ago</span>
                        <span class="mx-2">•</span>
                        <span>99.98% uptime this month</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Uptime History Section -->
    <section class="section bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-earth-100 text-earth-700 mb-3">
                    Performance
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">System Uptime History</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Review the historical uptime performance of Land Ledger services over time
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="card p-6 animate-fadeIn-scroll">
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium text-lg">Last 30 Days</h3>
                            <div class="flex items-center text-sm">
                                <span class="flex items-center mr-4">
                                    <span class="h-3 w-3 rounded-full bg-green-500 mr-1"></span>
                                    Operational
                                </span>
                                <span class="flex items-center mr-4">
                                    <span class="h-3 w-3 rounded-full bg-yellow-500 mr-1"></span>
                                    Degraded
                                </span>
                                <span class="flex items-center">
                                    <span class="h-3 w-3 rounded-full bg-red-500 mr-1"></span>
                                    Outage
                                </span>
                            </div>
                        </div>
                        
                        <!-- Timeline visualization -->
                        <div class="grid grid-cols-30 gap-1 mb-2">
                            <?php 
                            // This would be generated dynamically based on actual data
                            for ($i = 1; $i <= 30; $i++) {
                                $class = "h-10 rounded";
                                
                                // For demo purposes, adding some sample status changes
                                if ($i == 8 || $i == 9) {
                                    $class .= " bg-yellow-500"; // Degraded days
                                } else if ($i == 15) {
                                    $class .= " bg-red-500"; // Outage day
                                } else {
                                    $class .= " bg-green-500"; // Operational days
                                }
                                
                                echo "<div class='$class'></div>";
                            }
                            ?>
                        </div>
                        
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>30 days ago</span>
                            <span>Today</span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="text-3xl font-bold text-green-600 mb-1">99.8%</div>
                            <div class="text-sm text-gray-500">Overall Uptime</div>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="text-3xl font-bold text-primary mb-1">12 min</div>
                            <div class="text-sm text-gray-500">Avg. Incident Response</div>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="text-3xl font-bold text-secondary mb-1">4</div>
                            <div class="text-sm text-gray-500">Incidents This Month</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recent Incidents Section -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-soil-100 text-soil-700 mb-3">
                    Incident History
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Recent Incidents</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    View details of recent system incidents and how they were resolved
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Incident Item (Ongoing) -->
                <div class="card p-6 animate-fadeIn-scroll">
                    <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center mr-4 mt-1">
                            <i class="fa-solid fa-exclamation-circle text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-semibold text-lg">Map Services Performance Degradation</h3>
                                <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-xs font-medium">Ongoing</span>
                            </div>
                            
                            <div class="mt-3 space-y-3">
                                <div class="bg-yellow-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-yellow-800 font-medium">April 13, 2025 - 09:14 AM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-yellow-800">Investigating</span>
                                    </div>
                                    <p class="mt-1 text-sm">We're investigating reports of slow response times and occasional timeouts in the Map Services component. Users may experience delays when loading property maps and surveys.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 13, 2025 - 09:25 AM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Identified</span>
                                    </div>
                                    <p class="mt-1 text-sm">We've identified the cause as increased traffic to our map tile services. Our engineering team is working to allocate additional resources to handle the load.</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Affected components:</strong> Map Services, Property Boundary Visualization</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Incident Item (Resolved) -->
                <div class="card p-6 animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-4 mt-1">
                            <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-semibold text-lg">Authentication Service Disruption</h3>
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-xs font-medium">Resolved</span>
                            </div>
                            
                            <div class="mt-3 space-y-3">
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 10, 2025 - 14:22 PM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Investigating</span>
                                    </div>
                                    <p class="mt-1 text-sm">We're investigating reports of users unable to log in to their accounts. Some users are experiencing authentication failures and session timeouts.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 10, 2025 - 14:35 PM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Identified</span>
                                    </div>
                                    <p class="mt-1 text-sm">We've identified an issue with our authentication database connection pool. The engineering team is working on resolving the connection issues.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 10, 2025 - 15:10 PM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Resolved</span>
                                    </div>
                                    <p class="mt-1 text-sm">The authentication service has been restored to full operation. The issue was resolved by optimizing database connection handling and adding redundancy to prevent similar issues in the future.</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Affected components:</strong> Authentication Services, User Management</p>
                                <p><strong>Total downtime:</strong> 48 minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Incident Item (Resolved) -->
                <div class="card p-6 animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                    <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-4 mt-1">
                            <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-semibold text-lg">Payment Processing Delays</h3>
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-xs font-medium">Resolved</span>
                            </div>
                            
                            <div class="mt-3 space-y-3">
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 5, 2025 - 10:08 AM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Investigating</span>
                                    </div>
                                    <p class="mt-1 text-sm">We're investigating reports of delays in payment processing and receipt generation. Some users are experiencing longer than usual wait times for payment confirmations.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 5, 2025 - 10:30 AM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Identified</span>
                                    </div>
                                    <p class="mt-1 text-sm">The issue has been identified as a third-party payment gateway experiencing service degradation. We're in contact with our payment provider to resolve the issue.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-3 rounded">
                                    <div class="flex items-center">
                                        <span class="text-xs text-gray-600 font-medium">April 5, 2025 - 11:45 AM</span>
                                        <span class="mx-2">•</span>
                                        <span class="text-xs text-gray-600">Resolved</span>
                                    </div>
                                    <p class="mt-1 text-sm">The payment provider has resolved their service issues, and our payment processing has returned to normal operation. All pending transactions have been processed successfully.</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Affected components:</strong> Payment Services, Receipt Generation</p>
                                <p><strong>Total impact duration:</strong> 1 hour 37 minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="#" class="btn btn-outline">
                    View Full Incident History
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Scheduled Maintenance Section -->
    <section class="section bg-gradient-to-br from-gov-50 to-white">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Planning
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Scheduled Maintenance</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    View upcoming scheduled maintenance that may affect system availability
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Maintenance Item -->
                <div class="card p-6 animate-fadeIn-scroll">
                    <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4 mt-1">
                            <i class="fa-solid fa-wrench text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-semibold text-lg">Database Performance Upgrades</h3>
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-medium">Upcoming</span>
                            </div>
                            
                            <div class="mt-3">
                                <div class="bg-blue-50 p-4 rounded">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Scheduled Start</p>
                                            <p class="font-medium">April 20, 2025 - 10:00 PM</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Estimated Duration</p>
                                            <p class="font-medium">3 hours</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Affected Services</p>
                                            <p>Property Records, Tax History</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Expected Impact</p>
                                            <p>Limited read-only access</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Details:</strong> We will be performing database optimization and index rebuilding to improve query performance. During this time, property records and tax history will be available in read-only mode. Payment processing and other services will remain fully operational.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Maintenance Item -->
                <div class="card p-6 animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                    <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-4 mt-1">
                            <i class="fa-solid fa-wrench text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-wrap justify-between items-start gap-2">
                                <h3 class="font-semibold text-lg">System-Wide Security Updates</h3>
                                <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-medium">Upcoming</span>
                            </div>
                            
                            <div class="mt-3">
                                <div class="bg-blue-50 p-4 rounded">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Scheduled Start</p>
                                            <p class="font-medium">April 30, 2025 - 11:00 PM</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Estimated Duration</p>
                                            <p class="font-medium">4 hours</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Affected Services</p>
                                            <p>All Services</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-blue-800 font-medium mb-1">Expected Impact</p>
                                            <p>Complete system downtime</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Details:</strong> We will be performing critical security updates and infrastructure upgrades. This maintenance requires a complete system shutdown. During this time, all Land Ledger services will be unavailable. We recommend completing any urgent tasks before the scheduled maintenance window.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600 max-w-xl mx-auto mb-4">
                    Subscribe to receive notifications about scheduled maintenance and system incidents via email.
                </p>
                <a href="#" class="btn btn-outline">
                    <i class="fa-solid fa-bell mr-2"></i>
                    Subscribe to Notifications
                </a>
            </div>
        </div>
    </section>
</main>

<style>
/* Additional styles for this page */
.pulse {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(72, 187, 120, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(72, 187, 120, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(72, 187, 120, 0);
    }
}

/* Grid for the 30-day timeline */
.grid-cols-30 {
    grid-template-columns: repeat(30, 1fr);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Real-time clock updates could be added here if needed
    
    // For a real implementation, we would add API calls to fetch real-time status data
    // and update the UI components accordingly
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
