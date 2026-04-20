<?php if (isset($component)) { $__componentOriginal501803f3e4defcbbeaedee798b98ded4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal501803f3e4defcbbeaedee798b98ded4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::admin','data' => ['title' => __('Dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

  <!-- Welcome Banner -->
  <div class="d-flex align-items-center justify-content-between mb-4">
    <div>
      <h5 class="mb-0 fw-bold" style="color:#1e293b;">Good morning, <?php echo e(auth()->user()->name); ?> 👋</h5>
      <p class="text-muted mb-0" style="font-size:.82rem;">Here's what's happening with your certificates today.</p>
    </div>
    <a href="<?php echo e(route('events.index', ['create' => 1])); ?>" class="btn btn-sm btn-primary d-flex align-items-center gap-2"
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
          <div class="card-value">12</div>
          <div class="card-label">Total Events</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> 2 this month
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
          <div class="card-value">1,348</div>
          <div class="card-label">Certificates Generated</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> 48 today
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
          <div class="card-value">1,345</div>
          <div class="card-label">Emails Sent</div>
          <div class="card-trend trend-up">
            <i class="bi bi-arrow-up-short"></i> 99.8% delivery
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
          <div class="card-value">3</div>
          <div class="card-label">Pending Emails</div>
          <div class="card-trend trend-down">
            <i class="bi bi-arrow-down-short"></i> Retry queued
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
    <a href="#" class="btn btn-sm btn-outline-secondary"
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
        <tr>
          <td class="text-muted" style="font-size:.78rem;">01</td>
          <td>
            <div class="event-name">
              Tech4ED Digital Literacy Program
              <small>Quezon Province — Batch 3</small>
            </div>
          </td>
          <td style="white-space:nowrap;font-size:.82rem;">Feb 28, 2026</td>
          <td class="participant-count">
            <i class="bi bi-people-fill"></i>48
          </td>
          <td style="font-size:.82rem;">48 / 48</td>
          <td><span class="badge-completed">Completed</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary py-0 px-2"
               style="font-size:.72rem;border-radius:6px;" title="View">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-muted" style="font-size:.78rem;">02</td>
          <td>
            <div class="event-name">
              Cybersecurity Awareness Seminar
              <small>LGU Lucena City</small>
            </div>
          </td>
          <td style="white-space:nowrap;font-size:.82rem;">Mar 3, 2026</td>
          <td class="participant-count">
            <i class="bi bi-people-fill"></i>72
          </td>
          <td style="font-size:.82rem;">72 / 72</td>
          <td><span class="badge-completed">Completed</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary py-0 px-2"
               style="font-size:.72rem;border-radius:6px;" title="View">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-muted" style="font-size:.78rem;">03</td>
          <td>
            <div class="event-name">
              Free Wi-Fi Program Orientation
              <small>Atimonan, Quezon</small>
            </div>
          </td>
          <td style="white-space:nowrap;font-size:.82rem;">Mar 4, 2026</td>
          <td class="participant-count">
            <i class="bi bi-people-fill"></i>35
          </td>
          <td style="font-size:.82rem;">0 / 35</td>
          <td><span class="badge-ongoing">Ongoing</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary py-0 px-2"
               style="font-size:.72rem;border-radius:6px;" title="View">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-muted" style="font-size:.78rem;">04</td>
          <td>
            <div class="event-name">
              ICT for Public Service Training
              <small>Tayabas City</small>
            </div>
          </td>
          <td style="white-space:nowrap;font-size:.82rem;">Mar 10, 2026</td>
          <td class="participant-count">
            <i class="bi bi-people-fill"></i>60
          </td>
          <td style="font-size:.82rem;">— / 60</td>
          <td><span class="badge-scheduled">Scheduled</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary py-0 px-2"
               style="font-size:.72rem;border-radius:6px;" title="View">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="text-muted" style="font-size:.78rem;">05</td>
          <td>
            <div class="event-name">
              Digital Transformation Workshop
              <small>DICT Quezon 4A Office, Lucena</small>
            </div>
          </td>
          <td style="white-space:nowrap;font-size:.82rem;">Feb 14, 2026</td>
          <td class="participant-count">
            <i class="bi bi-people-fill"></i>90
          </td>
          <td style="font-size:.82rem;">90 / 90</td>
          <td><span class="badge-completed">Completed</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary py-0 px-2"
               style="font-size:.72rem;border-radius:6px;" title="View">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /Recent Events Table -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal501803f3e4defcbbeaedee798b98ded4)): ?>
<?php $attributes = $__attributesOriginal501803f3e4defcbbeaedee798b98ded4; ?>
<?php unset($__attributesOriginal501803f3e4defcbbeaedee798b98ded4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501803f3e4defcbbeaedee798b98ded4)): ?>
<?php $component = $__componentOriginal501803f3e4defcbbeaedee798b98ded4; ?>
<?php unset($__componentOriginal501803f3e4defcbbeaedee798b98ded4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Jikuma\Documents\coding-projects\e-certify\e-certify\e-certify\resources\views\dashboard.blade.php ENDPATH**/ ?>