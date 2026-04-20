<?php

use App\Mail\CertificateMail;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

test('certificate mail can be rendered', function () {
    $event = TrainingEvent::factory()->create(['title' => 'Web Development Workshop']);
    $participant = Participant::factory()->create([
        'name' => 'John Doe',
        'training_event_id' => $event->id,
    ]);

    $mailable = new CertificateMail($participant, 'fake/path/certificate.pdf');

    $mailable->assertHasSubject('Your E-Certificate for Web Development Workshop');
    $mailable->assertSeeInHtml('John Doe');
    $mailable->assertSeeInHtml('Web Development Workshop');
});

test('certificate mail has attachment', function () {
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create([
        'name' => 'Jane Smith',
        'training_event_id' => $event->id,
    ]);

    $tempFile = tempnam(sys_get_temp_dir(), 'cert');
    File::put($tempFile, 'dummy content');

    $mailable = new CertificateMail($participant, $tempFile);

    $mailable->assertHasAttachment($tempFile, [
        'as' => 'Certificate_Jane_Smith.pdf',
        'mime' => 'application/pdf',
    ]);

    unlink($tempFile);
});
