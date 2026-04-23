<div>
  <!-- Welcome Banner -->
  <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
      <h5 class="mb-0 fw-bold" style="color:#1e293b;">Good morning, {{ auth()->user()->name }} 👋</h5>
      <p class="text-muted mb-0" style="font-size:.82rem;">Here's what's happening with your certificates today.</p>
    </div>
    <a href="{{ route('events.index', ['create' => 1]) }}" class="btn btn-sm btn-primary d-flex align-items-center gap-2"
       style="background:var(--dict-blue);border-color:var(--dict-blue);border-radius:8px;font-size:.82rem;">
      <i class="bi bi-plus-lg"></i> New Event
    </a>
  </div>

  <!-- ── Summary Cards ── -->
  <div class="row g-3 mb-4">

    <div class="col-12 col-sm-6 col-xl-3">
      <div class="summary-card">
        <div class="card-icon icon-blue">
          <i class="bi bi-calendar-event-fill"></i>
        </div>
        <div class="card-info">
          <div class="card-value">{{ $stats['total_events']['value'] }}</div>
          <div class="card-label">Total Events</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> {{ $stats['total_events']['trend'] }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
      <div class="summary-card">
        <div class="card-icon icon-green">
          <i class="bi bi-patch-check-fill"></i>
        </div>
        <div class="card-info">
          <div class="card-value">{{ $stats['certificates_generated']['value'] }}</div>
          <div class="card-label">Certificates Generated</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> {{ $stats['certificates_generated']['trend'] }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
      <div class="summary-card">
        <div class="card-icon icon-gold">
          <i class="bi bi-envelope-check-fill"></i>
        </div>
        <div class="card-info">
          <div class="card-value">{{ $stats['emails_sent']['value'] }}</div>
          <div class="card-label">Emails Sent</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> {{ $stats['emails_sent']['trend'] }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-3">
      <div class="summary-card">
        <div class="card-icon icon-orange">
          <i class="bi bi-hourglass-split"></i>
        </div>
        <div class="card-info">
          <div class="card-value">{{ $stats['pending_emails']['value'] }}</div>
          <div class="card-label">Pending Emails</div>
          <div class="card-trend trend-down">
            <i class="bi bi-arrow-down-short"></i> {{ $stats['pending_emails']['trend'] }}
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /Summary Cards -->

  <!-- ── Recent Events Table ── -->
  <div class="section-header">
    <div class="section-title">
      <i class="bi bi-clock-history me-2" style="color:var(--dict-blue);"></i>
      Recent Events
    </div>
    <a href="{{ route('events.index') }}" class="btn btn-sm btn-outline-secondary"
       style="font-size:.78rem;border-radius:7px;">
      View All <i class="bi bi-arrow-right ms-1"></i>
    </a>
  </div>

  <div class="table-card">
    <table class="table table-hover align-middle">
      <thead>
        <tr>
          <th style="width:40px;">#</th>
          <th>Event Name</th>
          <th>Date</th>
          <th>Participants</th>
          <th>Certificates</th>
          <th>Status</th>
          <th style="width:80px;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($recentEvents as $event)
          <tr>
            <td class="text-muted" style="font-size:.78rem;">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</td>
            <td>
              <div class="event-name">
                {{ $event->title }}
                <small>{{ $event->location }}</small>
              </div>
            </td>
            <td style="white-space:nowrap;font-size:.82rem;">{{ $event->date->format('M d, Y') }}</td>
            <td class="participant-count">
              <i class="bi bi-people-fill"></i> {{ number_format($event->participants_count) }}
            </td>
            <td style="font-size:.82rem;">
              {{ number_format($event->generated_count) }} / {{ number_format($event->participants_count) }}
            </td>
            <td>
              @php
                $today = now()->startOfDay();
                $eventDate = $event->date->startOfDay();
              @endphp

              @if($eventDate->isFuture())
                <span class="badge-scheduled">Scheduled</span>
              @elseif($eventDate->isToday())
                <span class="badge-ongoing">Ongoing</span>
              @else
                <span class="badge-completed">Completed</span>
              @endif
            </td>
            <td>
              <a href="{{ route('events.participants', $event) }}" class="btn btn-sm btn-outline-primary py-0 px-2"
                 style="font-size:.72rem;border-radius:6px;" title="View">
                <i class="bi bi-eye"></i>
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" class="text-center py-5 text-muted">
              <div class="mb-3">
                <i class="bi bi-calendar-x" style="font-size: 3rem; opacity: 0.3;"></i>
              </div>
              <h6 class="fw-bold">No events recorded yet</h6>
              <p class="small mb-0">Create your first training event to start tracking certificates.</p>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
