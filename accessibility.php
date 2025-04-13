
<?php
// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-earth-900/10 to-gov-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Accessibility Policy</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Our commitment to making Land Ledger services accessible to all users.
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

    <!-- Accessibility Policy Content -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="card p-8 animate-fadeIn-scroll">
                    <div class="prose prose-lg max-w-none">
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-10 rounded-full bg-purple-100 text-purple-700 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-universal-access"></i>
                            </div>
                            <p class="text-sm text-gray-500">Last Updated: April 1, 2025</p>
                        </div>
                        
                        <p class="text-gray-600 mb-8">
                            Land Ledger is committed to ensuring digital accessibility for people with disabilities. We are continuously improving the user experience for everyone and applying the relevant accessibility standards to achieve this goal.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">1. Our Commitment</h2>
                        <p class="text-gray-600 mb-6">
                            Land Ledger is dedicated to providing a digital platform that is accessible to all users, including those with disabilities. We recognize the importance of making our services available to every citizen, regardless of their abilities or the assistive technologies they may use. Our goal is to ensure that all users can perceive, understand, navigate, and interact with our website and applications effectively.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">2. Standards We Follow</h2>
                        <p class="text-gray-600 mb-4">
                            Our website and digital services aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1, Level AA standards. These guidelines are developed by the World Wide Web Consortium (W3C) and represent the internationally recognized standard for web accessibility.
                        </p>
                        <p class="text-gray-600 mb-6">
                            The WCAG guidelines are organized around four principles, ensuring content is:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Perceivable:</strong> Information and user interface components must be presentable to users in ways they can perceive.</li>
                            <li><strong>Operable:</strong> User interface components and navigation must be operable by all users.</li>
                            <li><strong>Understandable:</strong> Information and the operation of the user interface must be understandable.</li>
                            <li><strong>Robust:</strong> Content must be robust enough to be interpreted reliably by a wide variety of user agents, including assistive technologies.</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">3. Accessibility Features</h2>
                        <p class="text-gray-600 mb-4">
                            Land Ledger incorporates the following accessibility features:
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">3.1 Navigation</h3>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Consistent navigation throughout the site</li>
                            <li>Skip navigation links to bypass repeated content</li>
                            <li>Breadcrumb navigation for clear location awareness</li>
                            <li>Logical tab order for keyboard navigation</li>
                            <li>Focus indicators for keyboard users</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">3.2 Content and Structure</h3>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Semantic HTML to ensure proper document structure</li>
                            <li>Appropriate heading hierarchy for clear content organization</li>
                            <li>Descriptive link text that makes sense out of context</li>
                            <li>ARIA landmarks for screen reader users to identify different sections</li>
                            <li>Tables with proper headers and captions for structured data</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">3.3 Visual Design and Readability</h3>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>High color contrast between text and background</li>
                            <li>Text resizing without loss of content or functionality</li>
                            <li>Responsive design that adapts to different screen sizes</li>
                            <li>No content that flashes more than three times per second</li>
                            <li>Clear and readable font styles</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">3.4 Forms and Interactive Elements</h3>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Accessible form labels and instructions</li>
                            <li>Clear error messages and suggestions for correction</li>
                            <li>No time limits or options to extend time limits</li>
                            <li>Form validation that provides feedback in an accessible manner</li>
                            <li>ARIA attributes for dynamic content and custom controls</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">3.5 Media</h3>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Alternative text for all non-decorative images</li>
                            <li>Captions for videos and audio content</li>
                            <li>Descriptive transcripts for audio-only content</li>
                            <li>Audio descriptions for video content when necessary</li>
                            <li>Controls for pausing, stopping, or adjusting volume for any audio that plays automatically</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">4. Accessibility Adjustments</h2>
                        <p class="text-gray-600 mb-4">
                            Land Ledger provides an accessibility adjustment panel that allows users to customize their experience based on their needs:
                        </p>
                        <div class="bg-muted p-4 rounded-lg mb-6">
                            <p class="font-medium mb-2">Available adjustments include:</p>
                            <ul class="list-disc pl-6 text-gray-600 space-y-1">
                                <li>Text size adjustment</li>
                                <li>Increased contrast mode</li>
                                <li>Link highlighting</li>
                                <li>Focus indication enhancements</li>
                                <li>Text spacing adjustments</li>
                                <li>Screen reader optimization</li>
                                <li>Content highlighting options</li>
                                <li>Dyslexia-friendly font option</li>
                            </ul>
                        </div>
                        <p class="text-gray-600 mb-6">
                            To access these adjustments, click on the accessibility icon located in the bottom-right corner of any page on our website.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">5. Compatible Assistive Technologies</h2>
                        <p class="text-gray-600 mb-4">
                            Land Ledger is designed to be compatible with the following assistive technologies:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Screen readers (including JAWS, NVDA, VoiceOver, and TalkBack)</li>
                            <li>Screen magnification software</li>
                            <li>Speech recognition software</li>
                            <li>Keyboard-only navigation</li>
                            <li>Switch control devices</li>
                            <li>Browser extensions for accessibility</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">6. Known Limitations</h2>
                        <p class="text-gray-600 mb-4">
                            We are continuously working to improve the accessibility of Land Ledger, but we recognize that some content may not yet meet all accessibility standards. Currently, we are aware of the following limitations:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Some older PDF documents may not be fully accessible</li>
                            <li>Some complex interactive maps may have limited accessibility alternatives</li>
                            <li>Third-party content or applications integrated into our platform may not meet the same accessibility standards</li>
                        </ul>
                        <p class="text-gray-600 mb-6">
                            We are actively working to address these limitations and improve accessibility across all areas of our platform.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">7. Testing and Evaluation</h2>
                        <p class="text-gray-600 mb-6">
                            Land Ledger regularly tests the accessibility of our website and applications using a combination of:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Automated testing tools</li>
                            <li>Manual testing by our development team</li>
                            <li>User testing with people who use assistive technologies</li>
                            <li>Periodic third-party accessibility audits</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">8. Feedback and Assistance</h2>
                        <p class="text-gray-600 mb-6">
                            We welcome feedback on the accessibility of Land Ledger. If you encounter any accessibility barriers or have suggestions for improvement, please contact us using one of the following methods:
                        </p>
                        <div class="bg-muted p-4 rounded-lg mb-6">
                            <p class="mb-1"><strong>Land Ledger Accessibility Support</strong></p>
                            <p class="mb-1">Email: accessibility@landledger.gov</p>
                            <p class="mb-1">Phone: (555) 123-4567</p>
                            <p class="mb-1">Accessibility Feedback Form: <a href="#" class="text-primary hover:underline">Available Here</a></p>
                        </div>
                        <p class="text-gray-600 mb-6">
                            If you need assistance using our website or services due to accessibility barriers, please contact us. We are committed to providing information in the format that works best for you.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">9. Alternative Formats</h2>
                        <p class="text-gray-600 mb-6">
                            If you need information from our website in an alternative format, we can provide:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Large print versions of content</li>
                            <li>Text-only versions of pages</li>
                            <li>Audio descriptions of visual content</li>
                            <li>Braille transcripts (upon request)</li>
                        </ul>
                        <p class="text-gray-600 mb-6">
                            To request information in an alternative format, please contact our accessibility support team using the details provided in Section 8.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">10. Continuous Improvement</h2>
                        <p class="text-gray-600 mb-6">
                            Land Ledger is committed to ongoing accessibility improvements. We regularly:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Train our staff on digital accessibility best practices</li>
                            <li>Include accessibility requirements in our procurement processes</li>
                            <li>Integrate accessibility testing into our development lifecycle</li>
                            <li>Stay informed about emerging accessibility standards and technologies</li>
                            <li>Review and update this accessibility policy as needed</li>
                        </ul>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-sm text-gray-500">This Accessibility Policy demonstrates our ongoing commitment to ensuring our digital services are accessible to all users. We appreciate your feedback as we continue to improve the accessibility of Land Ledger.</p>
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
                    
                    <a href="privacy.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.1s;">
                        <div class="flex items-center mb-4">
                            <div class="h-12 w-12 rounded-lg bg-green-100 text-green-600 flex items-center justify-center mr-4">
                                <i class="fa-solid fa-shield-halved text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-lg">Privacy Policy</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Learn how we collect, use, store, and protect your personal information when you use our services.
                        </p>
                        <div class="flex items-center text-primary">
                            <span>Read Policy</span>
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </div>
                    </a>
                    
                    <a href="refund.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.2s;">
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
                    
                    <a href="cookie.php" class="card p-6 hover-card-lift animate-fadeIn-scroll" style="animation-delay: 0.3s;">
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
