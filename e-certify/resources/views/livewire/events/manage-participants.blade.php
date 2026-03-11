<div>
    <!-- Page Header -->
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <a href="{{ route('events.index') }}" class="text-decoration-none text-muted small d-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i> Back to Events
                </a>
            </div>
            <h5 class="mb-0 fw-bold" style="color:#1e293b;">Participants: {{ $event->title }}</h5>
            <p class="text-muted mb-0" style="font-size:.82rem;">Manage participants and bulk upload via CSV.</p>
        </div>
        <button wire:click="openUploadModal" type="button" class="btn btn-sm btn-primary d-flex align-items-center justify-content-center gap-2"
            style="background:var(--dict-blue);border-color:var(--dict-blue);border-radius:8px;font-size:.82rem; min-height: 38px;">
            <i class="bi bi-upload"></i> Bulk Upload CSV
        </button>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="font-size: .82rem; border-radius: 8px;">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Table Section -->
    <div class="table-card">
        <div class="p-3 border-bottom d-flex justify-content-between align-items-center bg-white">
            <div class="input-group input-group-sm" style="max-width: 300px;">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                <input wire:model.live="search" type="text" class="form-control bg-light border-start-0" placeholder="Search participants...">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width:40px;">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="d-none d-md-table-cell">UUID / Certificate ID</th>
                        <th>Status</th>
                        <th style="width:80px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($participants as $participant)
                        <tr>
                            <td class="text-muted" style="font-size:.78rem;">{{ ($participants->currentPage() - 1) * $participants->perPage() + $loop->iteration }}</td>
                            <td class="fw-medium" style="font-size:.85rem;">{{ $participant->name }}</td>
                            <td style="font-size:.82rem;">{{ $participant->email }}</td>
                            <td class="d-none d-md-table-cell">
                                <code class="text-primary small fw-semibold" style="font-size:.75rem;">{{ $participant->uuid }}</code>
                            </td>
                            <td>
                                @php
                                    $badgeClass = match($participant->status) {
                                        'pending' => 'bg-warning-subtle text-warning-emphasis',
                                        'generated' => 'bg-info-subtle text-info-emphasis',
                                        'sent' => 'bg-success-subtle text-success-emphasis',
                                        default => 'bg-secondary-subtle'
                                    };
                                @endphp
                                <span class="badge {{ $badgeClass }}" style="font-size:.72rem; text-transform: capitalize; border: 1px solid currentColor; opacity: 0.9;">
                                    {{ $participant->status }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <button wire:click="edit({{ $participant->id }})" type="button" class="btn btn-sm btn-outline-primary py-0 px-2"
                                        style="font-size:.72rem;border-radius:6px;" title="Edit Participant">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button wire:click="confirmDelete({{ $participant->id }})" type="button" class="btn btn-sm btn-outline-danger py-0 px-2"
                                        style="font-size:.72rem;border-radius:6px;" title="Delete Participant">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <div class="mb-3">
                                    <i class="bi bi-people" style="font-size: 3rem; opacity: 0.3;"></i>
                                </div>
                                <h6 class="fw-bold">No participants found</h6>
                                <p class="small mb-0">Upload a CSV file to add participants to this event.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($participants->hasPages())
            <div class="p-3 border-top bg-white">
                {{ $participants->links() }}
            </div>
        @endif
    </div>

    <!-- Edit Participant Modal -->
    @if($showEditModal)
    <div class="modal fade show" id="editModal" tabindex="-1" style="display: block; background: rgba(0,0,0,0.5);">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header text-white" style="background: var(--dict-blue-dk);">
                    <h6 class="modal-title fw-semibold">
                        <i class="bi bi-pencil-square me-2"></i>Edit Participant
                    </h6>
                    <button wire:click="closeModals" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="update">
                    <div class="modal-body p-4" style="font-size:.88rem;">
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Full Name</label>
                            <input wire:model="editingName" type="text" class="form-control @error('editingName') is-invalid @enderror" placeholder="Enter participant name">
                            @error('editingName') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Email Address</label>
                            <input wire:model="editingEmail" type="email" class="form-control @error('editingEmail') is-invalid @enderror" placeholder="email@example.com">
                            @error('editingEmail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Status</label>
                            <select wire:model="editingStatus" class="form-select @error('editingStatus') is-invalid @enderror">
                                <option value="pending">Pending</option>
                                <option value="generated">Generated</option>
                                <option value="sent">Sent</option>
                            </select>
                            @error('editingStatus') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0 px-4 pb-4">
                        <button wire:click="closeModals" type="button" class="btn btn-sm btn-secondary px-3" style="border-radius: 7px;">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary px-4" style="background: var(--dict-blue); border-color: var(--dict-blue); border-radius: 7px;">
                            Update Participant
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif

    <!-- Delete Confirmation Modal -->
    @if($showDeleteModal)
    <div class="modal fade show" id="deleteModal" tabindex="-1" style="display: block; background: rgba(0,0,0,0.5);">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0 shadow">
                <div class="modal-header text-white" style="background: var(--dict-blue-dk);">
                    <h6 class="modal-title fw-semibold">
                        <i class="bi bi-exclamation-triangle me-2"></i>Confirm Delete
                    </h6>
                    <button wire:click="closeModals" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4" style="font-size:.88rem;">
                    <i class="bi bi-trash-fill mb-3 d-block" style="font-size:2rem;color:#dc3545;"></i>
                    Are you sure you want to remove this participant? This action cannot be undone.
                </div>
                <div class="modal-footer border-0 pt-0 justify-content-center pb-4">
                    <button wire:click="closeModals" type="button" class="btn btn-sm btn-secondary px-3" style="border-radius: 7px;">Cancel</button>
                    <button wire:click="delete" type="button" class="btn btn-sm btn-danger px-3" style="border-radius: 7px;">Yes, Remove</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Upload Modal -->
    @if($showUploadModal)
    <div class="modal fade show" id="uploadModal" tabindex="-1" style="display: block; background: rgba(0,0,0,0.5);">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header text-white" style="background: var(--dict-blue-dk);">
                    <h6 class="modal-title fw-semibold">
                        <i class="bi bi-upload me-2"></i>Bulk Upload Participants
                    </h6>
                    <button wire:click="closeUploadModal" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="import">
                    <div class="modal-body p-4" style="font-size:.88rem;">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <label class="form-label fw-semibold text-muted small text-uppercase mb-0">CSV File</label>
                                <a href="#" wire:click.prevent="downloadSample" class="text-decoration-none small d-flex align-items-center gap-1" style="color: var(--dict-blue);">
                                    <i class="bi bi-download"></i> Download Sample CSV
                                </a>
                            </div>
                            <input wire:model="csvFile" type="file" class="form-control @error('csvFile') is-invalid @enderror">
                            @error('csvFile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            <div class="form-text mt-2 small">
                                <i class="bi bi-info-circle me-1"></i> File must contain <strong>Name</strong> and <strong>Email</strong> headers.
                            </div>
                        </div>

                        <div wire:loading wire:target="csvFile" class="text-primary small mb-3">
                            <div class="spinner-border spinner-border-sm me-2" role="status"></div>
                            Uploading file...
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0 px-4 pb-4">
                        <button wire:click="closeUploadModal" type="button" class="btn btn-sm btn-secondary px-3" style="border-radius: 7px;">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary px-4" style="background: var(--dict-blue); border-color: var(--dict-blue); border-radius: 7px;">
                            <span wire:loading.remove wire:target="import">Start Import</span>
                            <span wire:loading wire:target="import">Importing...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
