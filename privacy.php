
<?php
// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-gov-900/10 to-earth-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Privacy Policy</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Learn how we collect, use, and protect your personal information.
                </p>
                <div class="flex justify-center gap-4 animate-slideUp-scroll" style="animation-delay: 0.2s;">
                    <a href="#" class="btn btn-outline" onclick="window.print(); return false;">
                        <i class="fa-solid fa-print mr-2"></i>
                        Print Policy
                    </a>
                    <a href="#" class="btn btn-outline" id="download-pdf">
                        <i class="fa-solid fa-download mr-2"></i>
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="card p-8 animate-fadeIn-scroll">
                    <div class="prose prose-lg max-w-none">
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-10 rounded-full bg-gov-100 text-gov-700 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <p class="text-sm text-gray-500">Last Updated: April 1, 2025</p>
                        </div>
                        
                        <p class="text-gray-600 mb-8">
                            Land Ledger ("we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our website, services, and applications (collectively, the "Services").
                        </p>
                        
                        <p class="text-gray-600 mb-8">
                            Please read this Privacy Policy carefully. By accessing or using our Services, you acknowledge that you have read, understood, and agree to be bound by this Privacy Policy. If you do not agree with our policies and practices, you should not use our Services.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">1. Information We Collect</h2>
                        
                        <h3 class="text-lg font-semibold mb-3">1.1 Personal Information</h3>
                        <p class="text-gray-600 mb-4">
                            We may collect the following types of personal information from you:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Contact information (e.g., name, email address, phone number, mailing address)</li>
                            <li>Government-issued identification (e.g., ID number, Social Security Number, Aadhaar number)</li>
                            <li>Property information (e.g., property address, property ID, ownership details)</li>
                            <li>Account credentials (e.g., username, password)</li>
                            <li>Payment information (e.g., credit card details, bank account information)</li>
                            <li>Communication preferences and history of interactions with us</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">1.2 Usage Information</h3>
                        <p class="text-gray-600 mb-4">
                            We automatically collect certain information about your device and how you interact with our Services:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Device information (e.g., IP address, browser type, operating system)</li>
                            <li>Usage patterns (e.g., pages visited, time spent on pages, click patterns)</li>
                            <li>Location data (if you grant permission)</li>
                            <li>Log files and error reports</li>
                            <li>Cookies and similar tracking technologies</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">2. How We Collect Information</h2>
                        <p class="text-gray-600 mb-4">
                            We collect information from you in several ways:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Direct Collection:</strong> Information you provide when you create an account, fill out forms, make payments, or communicate with us.</li>
                            <li><strong>Automated Collection:</strong> Information collected automatically through cookies, web beacons, and other tracking technologies when you use our Services.</li>
                            <li><strong>Third-Party Sources:</strong> Information we receive from government databases, identity verification services, and other third-party sources to verify your information or supplement the information you provide.</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">3. How We Use Your Information</h2>
                        <p class="text-gray-600 mb-4">
                            We use the information we collect for various purposes, including:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Providing and maintaining our Services</li>
                            <li>Verifying your identity and property ownership</li>
                            <li>Processing property tax payments and generating receipts</li>
                            <li>Communicating with you about your account, transactions, or inquiries</li>
                            <li>Sending important notifications about changes to our Services or policies</li>
                            <li>Improving and optimizing our Services</li>
                            <li>Analyzing usage patterns and trends</li>
                            <li>Detecting, preventing, and addressing technical issues, fraud, or security breaches</li>
                            <li>Complying with legal obligations</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">4. Legal Bases for Processing</h2>
                        <p class="text-gray-600 mb-6">
                            We process your information based on one or more of the following legal bases:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Performance of Contract:</strong> Processing necessary to fulfill our contractual obligations to you</li>
                            <li><strong>Legal Obligation:</strong> Processing necessary for compliance with legal requirements</li>
                            <li><strong>Legitimate Interests:</strong> Processing necessary for our legitimate interests, such as improving our Services, provided those interests are not overridden by your rights</li>
                            <li><strong>Consent:</strong> Processing based on your explicit consent, which you can withdraw at any time</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">5. Information Sharing and Disclosure</h2>
                        <p class="text-gray-600 mb-4">
                            We may share your information with:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Government Agencies:</strong> To verify information, process official records, or comply with legal requirements.</li>
                            <li><strong>Service Providers:</strong> Third-party vendors who provide services on our behalf, such as payment processing, data analysis, email delivery, and customer service.</li>
                            <li><strong>Legal Requirements:</strong> When required to comply with applicable laws, regulations, legal processes, or governmental requests.</li>
                            <li><strong>Protection of Rights:</strong> When necessary to protect our rights, privacy, safety, or property, or that of our users or others.</li>
                            <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, reorganization, or sale of assets, in which case the privacy policy of the new entity will govern.</li>
                        </ul>
                        <p class="text-gray-600 mb-6">
                            We do not sell or rent your personal information to third parties for their marketing purposes without your explicit consent.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">6. Data Retention</h2>
                        <p class="text-gray-600 mb-6">
                            We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law. When determining the retention period, we consider the nature and sensitivity of the information, the potential risk of harm from unauthorized use or disclosure, and applicable legal requirements.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">7. Data Security</h2>
                        <p class="text-gray-600 mb-6">
                            We implement appropriate technical and organizational measures to protect the security, integrity, and confidentiality of your information. These measures include encryption, access controls, and regular security assessments. However, no electronic transmission or storage system is 100% secure, so we cannot guarantee absolute security.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">8. Your Rights and Choices</h2>
                        <p class="text-gray-600 mb-4">
                            Depending on your location, you may have certain rights regarding your personal information:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Access:</strong> Request access to your personal information</li>
                            <li><strong>Correction:</strong> Request correction of inaccurate or incomplete information</li>
                            <li><strong>Deletion:</strong> Request deletion of your personal information, subject to certain exceptions</li>
                            <li><strong>Restriction:</strong> Request restriction of processing of your personal information</li>
                            <li><strong>Portability:</strong> Request the transfer of your personal information to another service or entity</li>
                            <li><strong>Objection:</strong> Object to the processing of your personal information</li>
                            <li><strong>Withdrawal of Consent:</strong> Withdraw your consent at any time where we rely on consent to process your information</li>
                        </ul>
                        <p class="text-gray-600 mb-6">
                            To exercise these rights, please contact us using the information provided in the "Contact Us" section below. We will respond to your request within the timeframe required by applicable law.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">9. Cookies and Similar Technologies</h2>
                        <p class="text-gray-600 mb-4">
                            We use cookies and similar tracking technologies to collect information about your browsing activities on our Services. Cookies are small data files stored on your device that help us improve our Services and your experience. You can control cookies through your browser settings and other tools. For more information about our use of cookies, please see our <a href="cookie.php" class="text-primary hover:underline">Cookie Policy</a>.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">10. Children's Privacy</h2>
                        <p class="text-gray-600 mb-6">
                            Our Services are not intended for children under the age of 18, and we do not knowingly collect personal information from children under 18. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us so that we can delete the information.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">11. International Data Transfers</h2>
                        <p class="text-gray-600 mb-6">
                            We primarily store and process your information within the country. However, we may transfer your information to other countries for processing or storage. When we transfer your information across borders, we implement appropriate safeguards to ensure that your information receives the same level of protection wherever it is processed.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">12. Changes to This Privacy Policy</h2>
                        <p class="text-gray-600 mb-6">
                            We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will notify you of any material changes by posting the updated Privacy Policy on our website and updating the "Last Updated" date. We encourage you to review this Privacy Policy periodically.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">13. Contact Us</h2>
                        <p class="text-gray-600 mb-4">
                            If you have any questions, concerns, or feedback about this Privacy Policy or our privacy practices, please contact us at:
                        </p>
                        <div class="bg-muted p-4 rounded-lg mb-6">
                            <p class="mb-1"><strong>Land Ledger Privacy Office</strong></p>
                            <p class="mb-1">Email: privacy@landledger.gov</p>
                            <p class="mb-1">Phone: (555) 123-4567</p>
                            <p>Address: 123 Government Plaza, Suite 500, Capital City</p>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-sm text-gray-500">By using Land Ledger services, you acknowledge that you have read and understood this Privacy Policy and agree to its terms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Documents Section -->
    <section class="section bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="inline-block py-1 px-3 rounded-full text-xs font-semibold bg-gov-100 text-gov-700 mb-3">
                    Related Documents
                </span>
                <h2 class="gradient-heading text-3xl font-bold mb-4">Other Policies</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Review our other policy documents that govern the use of Land Ledger services
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="terms.php" class="card p-6 hover-card-lift animate-fadeIn-scroll">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-lg bg-gov-100 text-gov-700 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-scale-balanced text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-lg">Terms of Service</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            The legal agreement between you and Land Ledger that governs your use of our services.
                        </p>
                        <div class="flex items-center text-primary">
                            <span>Read Terms</span>
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </div>
                    </a>
                    
                    <a href="refund.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-money-bill-transfer text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-lg">Refund Policy</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Understand the circumstances under which payments or fees may be refunded to users of our services.
                        </p>
                        <div class="flex items-center text-primary">
                            <span>Read Policy</span>
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </div>
                    </a>
                    
                    <a href="cookie.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.2s;">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-lg bg-yellow-100 text-yellow-600 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-cookie text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-lg">Cookie Policy</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Detailed information on how Land Ledger uses cookies and similar technologies on our website.
                        </p>
                        <div class="flex items-center text-primary">
                            <span>Read Policy</span>
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </div>
                    </a>
                    
                    <a href="accessibility.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.3s;">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-universal-access text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-lg">Accessibility Policy</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Our commitment to making Land Ledger services accessible to all users, including those with disabilities.
                        </p>
                        <div class="flex items-center text-primary">
                            <span>Read Policy</span>
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // PDF download functionality (would be implemented with a PDF generation library in a real application)
    const downloadPdf = document.getElementById('download-pdf');
    if (downloadPdf) {
        downloadPdf.addEventListener('click', function(e) {
            e.preventDefault();
            // In a real implementation, this would generate and download a PDF
            alert('PDF download would be triggered here. This is a demo feature.');
        });
    }
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>
