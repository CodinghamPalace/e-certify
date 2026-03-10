<div>
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h5 class="mb-0 fw-bold" style="color:#1e293b;">Manage Events</h5>
            <p class="text-muted mb-0" style="font-size:.82rem;">Create and manage training sessions for certificate generation.</p>
        </div>
        <button wire:click="create" type="button" class="btn btn-sm btn-primary d-flex align-items-center gap-2"
            style="background:var(--dict-blue);border-color:var(--dict-blue);border-radius:8px;font-size:.82rem;">
            <i class="bi bi-plus-lg"></i> New Event
        </button>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="font-size: .82rem; border-radius: 8px;">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Table Section -->
    <div class="table-card">
        <div class="p-3 border-bottom d-flex justify-content-between align-items-center bg-white">
            <div class="input-group input-group-sm" style="max-width: 300px;">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
                <input wire:model.live="search" type="text" class="form-control bg-light border-start-0" placeholder="Search events...">
            </div>
        </div>
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th style="width:40px;">#</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>UUID Prefix</th>
                    <th style="width:120px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr>
                        <td class="text-muted" style="font-size:.78rem;">{{ ($events->currentPage() - 1) * $events->perPage() + $loop->iteration }}</td>
                        <td>
                            <div class="event-name">
                                {{ $event->title }}
                                <small>{{ Str::limit($event->description, 50) }}</small>
                            </div>
                        </td>
                        <td style="white-space:nowrap;font-size:.82rem;">{{ $event->date->format('M d, Y') }}</td>
                        <td style="font-size:.82rem;">{{ $event->location ?? 'N/A' }}</td>
                        <td><span class="badge" style="background:#dbeafe; color:#1d4ed8; font-size:.72rem;">{{ $event->uuid_prefix }}</span></td>
                        <td>
                            <div class="d-flex gap-1">
                                <button wire:click="edit({{ $event->id }})" type="button" class="btn btn-sm btn-outline-primary py-0 px-2"
                                    style="font-size:.72rem;border-radius:6px;" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button onclick="confirm('Are you sure you want to delete this event?') || event.stopImmediatePropagation()" wire:click="delete({{ $event->id }})" type="button" class="btn btn-sm btn-outline-danger py-0 px-2"
                                    style="font-size:.72rem;border-radius:6px;" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            No events found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($events->hasPages())
            <div class="p-3 border-top bg-white">
                {{ $events->links() }}
            </div>
        @endif
    </div>

    <!-- Event Modal -->
    <div wire:ignore.self class="modal fade @if($showModal) show @endif" id="eventModal" tabindex="-1" style="@if($showModal) display: block; background: rgba(0,0,0,0.5); @endif">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow">
                <div class="modal-header text-white" style="background: var(--dict-blue-dk);">
                    <h6 class="modal-title fw-semibold">
                        <i class="bi @if($isEditing) bi-pencil-square @else bi-plus-circle @endif me-2"></i>
                        {{ $isEditing ? 'Edit Event' : 'New Event' }}
                    </h6>
                    <button wire:click="closeModal" type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body p-4" style="font-size:.88rem;">
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Event Title</label>
                            <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="e.g. Cybersecurity Seminar">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Description</label>
                            <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Brief details about the event..."></textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold text-muted small text-uppercase">Date</label>
                                <input wire:model="date" type="date" class="form-control @error('date') is-invalid @enderror">
                                @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold text-muted small text-uppercase">UUID Prefix</label>
                                <input wire:model="uuid_prefix" type="text" class="form-control @error('uuid_prefix') is-invalid @enderror" placeholder="e.g. CYBER-2026-">
                                @error('uuid_prefix') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="mb-0">
                            <label class="form-label fw-semibold text-muted small text-uppercase">Location</label>
                            <input wire:model="location" type="text" class="form-control @error('location') is-invalid @enderror" placeholder="e.g. Lucena City">
                            @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0 px-4 pb-4">
                        <button wire:click="closeModal" type="button" class="btn btn-sm btn-secondary px-3" style="border-radius: 7px;">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary px-4" style="background: var(--dict-blue); border-color: var(--dict-blue); border-radius: 7px;">
                            {{ $isEditing ? 'Update Event' : 'Create Event' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
