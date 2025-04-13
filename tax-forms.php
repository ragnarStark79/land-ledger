
<?php
// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-b from-gov-100 to-white py-12">
  <div class="container-custom">
    <div class="text-center max-w-3xl mx-auto animate-slideUp">
      <h1 class="gradient-heading mb-4">Property Tax Forms</h1>
      <p class="text-lg mb-8">Access, download, and submit official property tax forms and applications.</p>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="section bg-white">
  <div class="container-custom">
    <!-- Search and Filter -->
    <div class="max-w-4xl mx-auto mb-12">
      <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="md:col-span-2">
            <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Search Forms</label>
            <div class="relative">
              <input type="text" id="search" name="search" class="input w-full pl-10" placeholder="Search by form name or number...">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
              </div>
            </div>
          </div>
          
          <div>
            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Form Category</label>
            <select id="category" name="category" class="input w-full">
              <option value="all">All Categories</option>
              <option value="exemptions">Exemptions</option>
              <option value="appeals">Assessment Appeals</option>
              <option value="payment">Payment Plans</option>
              <option value="general">General Forms</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Exemption Forms -->
    <div class="max-w-4xl mx-auto mb-16">
      <h2 class="text-2xl font-semibold mb-6">Exemption Forms</h2>
      
      <div class="space-y-4">
        <!-- Homestead Exemption -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Homestead Exemption Application</h3>
                <p class="text-gray-500 text-sm">Form HS-100 | Last updated: January 2023</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Use this form to apply for a homestead property tax exemption on your primary residence. This exemption can reduce your property's assessed value by up to $25,000.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Proof of primary residence (utility bill, driver's license)</li>
                    <li>Copy of deed or property ownership document</li>
                    <li>Completed and signed application form</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Dates</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Application deadline: March 1</li>
                    <li>Late applications accepted until December 31 with penalty</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Senior Citizen Exemption -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Senior Citizen Exemption</h3>
                <p class="text-gray-500 text-sm">Form SC-200 | Last updated: February 2023</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">This form is for property owners aged 65 or older who meet income requirements. This exemption provides an additional reduction in assessed property value of up to $15,000.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Proof of age (birth certificate, driver's license, passport)</li>
                    <li>Proof of income (tax returns, SSI statement)</li>
                    <li>Proof of property ownership</li>
                    <li>Completed and signed application form</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Dates</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Application deadline: April 1</li>
                    <li>Must be renewed annually by April 1</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Veteran Exemption -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Veteran Property Tax Exemption</h3>
                <p class="text-gray-500 text-sm">Form VT-300 | Last updated: December 2022</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Available to veterans with service-connected disabilities or their surviving spouses. Provides property tax relief based on the degree of disability, with full exemptions available in some cases.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>DD-214 or military discharge papers</li>
                    <li>VA disability rating letter</li>
                    <li>Proof of property ownership</li>
                    <li>Completed and signed application form</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Dates</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Application accepted year-round</li>
                    <li>Benefits begin in tax year following approval</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Assessment Appeal Forms -->
    <div class="max-w-4xl mx-auto mb-16">
      <h2 class="text-2xl font-semibold mb-6">Assessment Appeal Forms</h2>
      
      <div class="space-y-4">
        <!-- Assessment Appeal Form -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Property Assessment Appeal</h3>
                <p class="text-gray-500 text-sm">Form AP-100 | Last updated: January 2023</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Use this form to appeal the assessed value of your property if you believe it is inaccurate or does not reflect fair market value.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Recent property assessment notice</li>
                    <li>Evidence supporting your claimed value (appraisals, sales of comparable properties)</li>
                    <li>Photographs or other documentation</li>
                    <li>Completed and signed appeal form</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Dates</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Appeal deadline: 60 days from assessment notice date</li>
                    <li>Hearings typically scheduled 2-3 months after filing</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Assessment Correction Request -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Assessment Correction Request</h3>
                <p class="text-gray-500 text-sm">Form CR-200 | Last updated: November 2022</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Request correction of factual errors in your property assessment, such as incorrect square footage, number of bedrooms, or property features.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Current property assessment notice</li>
                    <li>Floor plans or building permits</li>
                    <li>Photographs showing correct property details</li>
                    <li>Survey or professional measurement document</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Dates</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Can be submitted any time during the tax year</li>
                    <li>Processing time: 2-4 weeks</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Payment Forms -->
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl font-semibold mb-6">Payment Forms</h2>
      
      <div class="space-y-4">
        <!-- Payment Plan Request -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Payment Plan Request</h3>
                <p class="text-gray-500 text-sm">Form PP-100 | Last updated: March 2023</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Request a payment plan for property taxes if you are unable to pay the full amount by the due date. Plans are available for 3, 6, or 12-month terms.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Current property tax bill</li>
                    <li>Completed application with requested payment plan terms</li>
                    <li>Proof of financial hardship (if applicable)</li>
                    <li>Initial payment (typically 10% of total amount due)</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Important Notes</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Interest still accrues during payment plan period</li>
                    <li>Missed payments may void the agreement</li>
                    <li>Apply at least 30 days before tax due date</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Tax Refund Request -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-1">Property Tax Refund Request</h3>
                <p class="text-gray-500 text-sm">Form RF-200 | Last updated: January 2023</p>
              </div>
              
              <div class="flex flex-wrap gap-3">
                <a href="#" class="btn btn-outline py-2 px-4">
                  <i class="fa-solid fa-file-pdf mr-2"></i>Download PDF
                </a>
                <a href="#" class="btn btn-primary py-2 px-4">
                  <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
                </a>
              </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-200">
              <p class="text-gray-600">Use this form to request a refund for overpayment of property taxes due to assessment reductions, duplicate payments, or other adjustments.</p>
              
              <div class="mt-3 flex flex-col md:flex-row gap-6">
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Required Documents</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Proof of original payment (receipt or canceled check)</li>
                    <li>Documentation supporting refund claim</li>
                    <li>Completed and signed refund request form</li>
                  </ul>
                </div>
                <div class="flex-1">
                  <h4 class="text-sm font-medium text-gray-500 mb-1">Processing Time</h4>
                  <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                    <li>Typical processing time: 4-6 weeks</li>
                    <li>Refunds issued by check or direct deposit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Submission Guide -->
<section class="section bg-gray-50">
  <div class="container-custom">
    <h2 class="text-2xl font-semibold text-center mb-12">How to Submit Tax Forms</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-gov-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-globe text-gov-600 text-2xl"></i>
          </div>
          <h3 class="font-semibold mt-4 mb-2">Online Submission</h3>
        </div>
        <p class="text-gray-600 mb-4">Submit forms online through our secure portal. You'll need to create an account or log in to your existing account.</p>
        <ul class="list-disc list-inside text-gray-600 space-y-1 mb-6">
          <li>Available 24/7</li>
          <li>Fastest processing time</li>
          <li>Submit digital copies of supporting documents</li>
          <li>Receive confirmation immediately</li>
        </ul>
        <a href="#" class="btn btn-primary w-full">
          <i class="fa-solid fa-paper-plane mr-2"></i>Submit Online
        </a>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-earth-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-envelope text-earth-600 text-2xl"></i>
          </div>
          <h3 class="font-semibold mt-4 mb-2">Mail Submission</h3>
        </div>
        <p class="text-gray-600 mb-4">Print and complete forms, then mail them with required supporting documentation to our office.</p>
        <div class="mb-6">
          <p class="font-medium">Mailing Address:</p>
          <address class="text-gray-600 not-italic">
            Property Tax Department<br>
            P.O. Box 12345<br>
            Cityville, ST 12345
          </address>
        </div>
        <a href="#" class="btn btn-outline w-full">
          <i class="fa-solid fa-print mr-2"></i>Print Forms
        </a>
      </div>
      
      <div class="bg-white p-6 rounded-lg shadow-sm">
        <div class="text-center mb-4">
          <div class="w-16 h-16 bg-gold-100 rounded-full flex items-center justify-center mx-auto">
            <i class="fa-solid fa-building text-gold-700 text-2xl"></i>
          </div>
          <h3 class="font-semibold mt-4 mb-2">In-Person Submission</h3>
        </div>
        <p class="text-gray-600 mb-4">Visit our office to submit forms in person and receive assistance if needed.</p>
        <div class="mb-6">
          <p class="font-medium">Office Location:</p>
          <address class="text-gray-600 not-italic mb-2">
            123 Government Way<br>
            Cityville, ST 12345
          </address>
          <p class="text-gray-600">
            <strong>Hours:</strong> Monday-Friday, 8am-5pm
          </p>
        </div>
        <a href="contact.php" class="btn btn-outline w-full">
          <i class="fa-solid fa-map-location-dot mr-2"></i>Get Directions
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Need Help Section -->
<section class="section bg-gradient-to-r from-gov-700 to-earth-700 text-white">
  <div class="container-custom">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">Need Help With Tax Forms?</h2>
      <p class="text-lg mb-8 text-white/90">Our tax specialists are available to answer questions and provide assistance with completing forms.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="contact.php" class="btn bg-white text-gov-700 hover:bg-gray-100">
          <i class="fa-solid fa-phone-volume mr-2"></i>Contact Support
        </a>
        <a href="faqs.php" class="btn bg-white/20 text-white hover:bg-white/30">
          <i class="fa-solid fa-circle-question mr-2"></i>View FAQs
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
