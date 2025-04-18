
<?php
// Include header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 bg-muted">
        <div class="absolute inset-0 bg-gradient-to-r from-earth-900/10 to-gold-900/10 z-0"></div>
        <div class="absolute inset-0 bg-[url('assets/land-pattern.svg')] opacity-5 z-0"></div>
        
        <div class="container-custom relative z-10">
            <div class="text-center">
                <h1 class="gradient-heading text-3xl md:text-4xl font-bold mb-4 animate-fadeIn">Refund Policy</h1>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8 animate-slideUp-scroll">
                    Understanding our refund processes and conditions for Land Ledger services.
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

    <!-- Refund Policy Content -->
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="card p-8 animate-fadeIn-scroll">
                    <div class="prose prose-lg max-w-none">
                        <div class="flex items-center mb-6">
                            <div class="h-10 w-10 rounded-full bg-gold-100 text-gold-700 flex items-center justify-center mr-3">
                                <i class="fa-solid fa-money-bill-transfer"></i>
                            </div>
                            <p class="text-sm text-gray-500">Last Updated: April 1, 2025</p>
                        </div>
                        
                        <p class="text-gray-600 mb-8">
                            This Refund Policy ("Policy") explains the conditions under which Land Ledger ("we," "us," or "our") may process refunds for payments made through our website, services, and applications (collectively, the "Services"). Please read this Policy carefully before making any payments through our Services.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">1. Types of Payments</h2>
                        <p class="text-gray-600 mb-4">
                            Through this Land Ledger platform, users may make several types of payments:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Property Tax Payments:</strong> Regular tax payments required by law</li>
                            <li><strong>Document Fees:</strong> Charges for obtaining official documents and certificates</li>
                            <li><strong>Application Fees:</strong> Charges for processing applications and requests</li>
                            <li><strong>Service Fees:</strong> Administrative charges for specific services</li>
                            <li><strong>Late Payment Penalties:</strong> Additional charges for overdue payments</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">2. Refundable Payments</h2>
                        <p class="text-gray-600 mb-4">
                            The following types of payments may be eligible for refund under certain circumstances:
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">2.1 Duplicate Payments</h3>
                        <p class="text-gray-600 mb-6">
                            If you accidentally make the same payment more than once (e.g., paying the same property tax bill twice), we will automatically process a refund for the duplicate payment once verified. These refunds are typically processed within 10-15 business days.
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">2.2 Overpayments</h3>
                        <p class="text-gray-600 mb-6">
                            If you pay an amount that exceeds your actual liability (e.g., paying more property tax than is due), the excess amount may be:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Refunded to you upon request</li>
                            <li>Applied as a credit to your future payments</li>
                            <li>Automatically refunded if the overpayment exceeds a certain threshold</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">2.3 Erroneous Assessments</h3>
                        <p class="text-gray-600 mb-6">
                            If you paid based on an incorrect assessment and subsequently receive a corrected assessment with a lower amount due, you may request a refund for the difference. These refunds require review and verification by the appropriate authority.
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">2.4 Service Not Provided</h3>
                        <p class="text-gray-600 mb-6">
                            If you paid for a specific service or document that was not delivered or processed within the specified timeframe due to administrative error on our part, you may request a refund. Verification of non-delivery is required.
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">2.5 Technical Errors</h3>
                        <p class="text-gray-600 mb-6">
                            If a technical error in our system results in an incorrect charge or payment, we will process a refund once the error is confirmed. These refunds are typically processed within 7-10 business days.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">3. Non-Refundable Payments</h2>
                        <p class="text-gray-600 mb-4">
                            The following types of payments are generally not refundable:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Correctly Assessed Property Taxes:</strong> Property taxes that have been correctly assessed and paid</li>
                            <li><strong>Application Processing Fees:</strong> Fees for processing applications, regardless of whether the application is approved or denied</li>
                            <li><strong>Late Payment Penalties:</strong> Penalties assessed for late payments</li>
                            <li><strong>Convenience Fees:</strong> Additional fees charged for the convenience of online payment, if applicable</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">4. Refund Eligibility Period</h2>
                        <p class="text-gray-600 mb-6">
                            Requests for refunds must be submitted within specific timeframes:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li><strong>Duplicate Payments:</strong> Within 1 year of the duplicate payment date</li>
                            <li><strong>Overpayments:</strong> Within 3 years of the overpayment date</li>
                            <li><strong>Erroneous Assessments:</strong> Within 3 years of the payment date</li>
                            <li><strong>Service Not Provided:</strong> Within 60 days of the expected service delivery date</li>
                            <li><strong>Technical Errors:</strong> Within 60 days of the payment date</li>
                        </ul>
                        
                        <h2 class="text-xl font-bold mb-4">5. Refund Process</h2>
                        
                        <h3 class="text-lg font-semibold mb-3">5.1 How to Request a Refund</h3>
                        <p class="text-gray-600 mb-4">
                            To request a refund, you must:
                        </p>
                        <ol class="list-decimal pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Log in to your Land Ledger account</li>
                            <li>Navigate to "Payment History" or "Transaction History"</li>
                            <li>Identify the payment for which you want a refund</li>
                            <li>Select "Request Refund" option</li>
                            <li>Provide the reason for the refund request</li>
                            <li>Submit any required supporting documentation</li>
                        </ol>
                        <p class="text-gray-600 mb-6">
                            Alternatively, you can contact our support team directly through the "Contact Us" section or by emailing refunds@landledger.gov.
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">5.2 Required Documentation</h3>
                        <p class="text-gray-600 mb-4">
                            Depending on the nature of your refund request, you may need to provide:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Proof of payment (e.g., receipt, transaction confirmation)</li>
                            <li>Evidence of duplicate payment or overpayment</li>
                            <li>Corrected assessment notice (for erroneous assessments)</li>
                            <li>Description of the technical error or service issue</li>
                            <li>Any other relevant supporting documentation</li>
                        </ul>
                        
                        <h3 class="text-lg font-semibold mb-3">5.3 Review Process</h3>
                        <p class="text-gray-600 mb-6">
                            Upon receiving your refund request, our team will:
                        </p>
                        <ol class="list-decimal pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Verify the payment in question</li>
                            <li>Review the reason for the refund request</li>
                            <li>Evaluate any supporting documentation</li>
                            <li>Determine eligibility based on this Policy</li>
                            <li>Approve or deny the request based on the review</li>
                        </ol>
                        
                        <h3 class="text-lg font-semibold mb-3">5.4 Processing Time</h3>
                        <p class="text-gray-600 mb-6">
                            Once approved, refunds are typically processed within the following timeframes:
                        </p>
                        <ul class="list-disc pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Credit/Debit Card Refunds: 7-10 business days</li>
                            <li>Bank Transfer Refunds: 10-15 business days</li>
                            <li>Check Refunds: 15-20 business days</li>
                        </ul>
                        <p class="text-gray-600 mb-6">
                            You will receive notification via email when your refund has been processed.
                        </p>
                        
                        <h3 class="text-lg font-semibold mb-3">5.5 Refund Method</h3>
                        <p class="text-gray-600 mb-6">
                            Refunds will generally be issued using the same payment method used for the original transaction. If that is not possible, an alternative refund method may be arranged.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">6. Disputed Transactions</h2>
                        <p class="text-gray-600 mb-6">
                            If your refund request is denied and you believe this decision is incorrect, you may appeal the decision by:
                        </p>
                        <ol class="list-decimal pl-6 mb-6 text-gray-600 space-y-2">
                            <li>Submitting an appeal request through your Land Ledger account</li>
                            <li>Providing additional documentation or clarification</li>
                            <li>Explaining why you believe the refund should be approved</li>
                        </ol>
                        <p class="text-gray-600 mb-6">
                            Appeals will be reviewed by a supervisor or manager not involved in the initial decision. The appeal decision will be communicated to you within 15 business days.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">7. Changes to This Policy</h2>
                        <p class="text-gray-600 mb-6">
                            We may update this Refund Policy from time to time to reflect changes in our refund practices or legal requirements. We will notify you of any material changes by posting the updated Policy on our website and updating the "Last Updated" date. We encourage you to review this Policy periodically.
                        </p>
                        
                        <h2 class="text-xl font-bold mb-4">8. Contact Information</h2>
                        <p class="text-gray-600 mb-4">
                            If you have any questions or concerns about this Refund Policy or specific refund requests, please contact us at:
                        </p>
                        <div class="bg-muted p-4 rounded-lg mb-6">
                            <p class="mb-1"><strong>Land Ledger Refunds Department</strong></p>
                            <p class="mb-1">Email: refunds@landledger.gov</p>
                            <p class="mb-1">Phone: (555) 123-4567</p>
                            <p>Address: 123 Government Plaza, Suite 500, Capital City</p>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-sm text-gray-500">By using Land Ledger payment services, you acknowledge that you have read and understood this Refund Policy and agree to its terms.</p>
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
