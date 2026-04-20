<?php

use App\Jobs\SendCertificateJob;
use App\Mail\CertificateMail;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;

test('it simulates bulk dispatch of 5 participants and verifies queueing', function () {
    Bus::fake();
    
    $event = TrainingEvent::factory()->create();
    $participants = Participant::factory()->count(5)->create([
        'training_event_id' => $event->id,
        'status' => 'generated'
    ]);

    // Simulate bulk dispatch
    foreach ($participants as $participant) {
        SendCertificateJob::dispatch($participant, 'fake/path/cert.pdf');
    }

    // Verify 5 jobs were pushed to the queue
    Bus::assertDispatched(SendCertificateJob::class, 5);
});

test('it transitions participant status from generated to sent after successful job execution', function () {
    Mail::fake();
    
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create([
        'training_event_id' => $event->id,
        'status' => 'generated'
    ]);

    $job = new SendCertificateJob($participant, 'fake/path/cert.pdf');
    
    // Status should be generated before execution
    expect($participant->fresh()->status)->toBe('generated');

    // Execute the job manually
    $job->handle();

    // Verify status transition
    expect($participant->fresh()->status)->toBe('sent');
    
    // Verify mail was sent
    Mail::assertSent(CertificateMail::class, function ($mail) use ($participant) {
        return $mail->hasTo($participant->email);
    });
});

test('it has correct retry and backoff properties', function () {
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create(['training_event_id' => $event->id]);
    
    $job = new SendCertificateJob($participant, 'fake/path/cert.pdf');

    expect($job->tries)->toBe(3);
    expect($job->backoff)->toBe([60, 300, 600]);
});

test('it is pushed to the default queue', function () {
    Queue::fake();
    
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create(['training_event_id' => $event->id]);

    SendCertificateJob::dispatch($participant, 'fake/path/cert.pdf');

    Queue::assertPushed(SendCertificateJob::class, function ($job) {
        return $job->queue === null; // null means default queue in Laravel unless specified
    });
});
