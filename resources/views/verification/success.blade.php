<x-layouts::verification title="Certificate Verified">
    <div class="verification-card text-center">
        <div class="mb-4">
            <i class="bi bi-patch-check-fill text-success" style="font-size: 4rem;"></i>
        </div>
        
        <h2 class="fw-bold mb-1">Certificate Verified</h2>
        <p class="text-muted mb-4">This certificate is authentic and registered in our system.</p>
        
        <hr class="my-4">
        
        <div class="text-start">
            <div class="mb-3">
                <label class="small text-uppercase fw-bold text-muted">Participant Name</label>
                <div class="fs-4 fw-semibold text-dark">{{ $participant->name }}</div>
            </div>
            
            <div class="mb-3">
                <label class="small text-uppercase fw-bold text-muted">Training Event</label>
                <div class="fs-5 fw-medium text-dark">{{ $event->title }}</div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="small text-uppercase fw-bold text-muted">Date</label>
                    <div class="fw-medium text-dark">{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</div>
                </div>
                <div class="col-sm-6 mt-3 mt-sm-0">
                    <label class="small text-uppercase fw-bold text-muted">Location</label>
                    <div class="fw-medium text-dark">{{ $event->location }}</div>
                </div>
            </div>

            <div class="mb-3">
                <label class="small text-uppercase fw-bold text-muted">Issuing Authority</label>
                <div class="fw-medium text-dark">DICT Quezon 4A Provincial Office</div>
            </div>

            <div class="mb-0">
                <label class="small text-uppercase fw-bold text-muted">Verification UUID</label>
                <div class="small font-monospace text-muted text-break">{{ $participant->uuid }}</div>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="small text-muted">
            <i class="bi bi-clock-history me-1"></i> Verified on {{ now()->format('M d, Y - h:i A') }}
        </div>
    </div>
</x-layouts::verification>
