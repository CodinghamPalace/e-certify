<x-layouts::verification title="Invalid Certificate">
    <div class="verification-card text-center">
        <div class="mb-4">
            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 4rem;"></i>
        </div>
        
        <h2 class="fw-bold mb-1 text-danger">Invalid Certificate</h2>
        <p class="text-muted mb-4">The certificate UUID you provided could not be found in our database or has been revoked.</p>
        
        <div class="alert alert-danger border-0 small mb-4" style="background:#fff5f5; color:#c53030; text-align: left;">
            <i class="bi bi-info-circle me-2"></i> <strong>Reference UUID:</strong><br>
            <span class="font-monospace text-break">{{ $uuid }}</span>
        </div>

        <p class="small text-muted mb-4 text-start">
            <strong>Possible reasons:</strong>
            <ul class="small text-muted text-start">
                <li>The QR code was scanned incorrectly.</li>
                <li>The UUID in the URL was modified manually.</li>
                <li>The certificate is not yet registered in the system.</li>
            </ul>
        </p>
        
        <hr class="my-4">
        
        <div class="d-grid gap-2">
            <a href="mailto:quezon@dict.gov.ph" class="btn btn-primary" style="background:var(--dict-blue); border-color:var(--dict-blue);">
                <i class="bi bi-envelope me-2"></i> Contact Support
            </a>
            <a href="/" class="btn btn-outline-secondary">
                Back to Portal
            </a>
        </div>
    </div>
</x-layouts::verification>
