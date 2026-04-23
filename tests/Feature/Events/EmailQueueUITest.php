<?php

use App\Actions\Participants\QueueCertificateEmail;
use App\Jobs\SendCertificateJob;
use App\Livewire\Events\ManageParticipants;
use App\Models\Participant;
use App\Models\TrainingEvent;
use App\Models\User;
use Illuminate\Support\Facades\Bus;
use Livewire\Livewire;

test('clicking bulk send correctly pushes jobs and updates ui state', function () {
    $user = User::factory()->create();
    $event = TrainingEvent::factory()->create();
    $participants = Participant::factory()->count(3)->create([
        'training_event_id' => $event->id,
        'status' => 'generated'
    ]);

    Bus::fake();

    Livewire::actingAs($user)
        ->test(ManageParticipants::class, ['event' => $event])
        ->assertSee('Send All Pending (3)')
        ->call('confirmBulkSend')
        ->assertSet('showBulkSendModal', true)
        ->call('sendBulk')
        ->assertSet('showBulkSendModal', false)
        ->assertHasNoErrors()
        ->assertSee('3 certificates have been queued for background dispatch.');

    Bus::assertDispatched(SendCertificateJob::class, 3);
});

test('clicking single send icon pushes job and updates ui state', function () {
    $user = User::factory()->create();
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create([
        'training_event_id' => $event->id,
        'status' => 'generated',
        'name' => 'John Dynamic'
    ]);

    Bus::fake();

    Livewire::actingAs($user)
        ->test(ManageParticipants::class, ['event' => $event])
        ->assertSee('John Dynamic')
        ->call('confirmSingleSend', $participant->id)
        ->assertSet('showSingleSendModal', true)
        ->call('sendSingle')
        ->assertSet('showSingleSendModal', false)
        ->assertSee('The certificate for John Dynamic has been queued.');

    Bus::assertDispatched(SendCertificateJob::class, 1);
});

test('ui reflects sent status after job completion upon component refresh', function () {
    $user = User::factory()->create();
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create([
        'training_event_id' => $event->id,
        'status' => 'generated',
        'name' => 'Status Checker'
    ]);

    $component = Livewire::actingAs($user)
        ->test(ManageParticipants::class, ['event' => $event])
        ->assertSee('generated');

    // Simulate the job executing in the background
    $participant->update(['status' => 'sent']);

    // Livewire re-renders on every action/poll. 
    // Here we just call a dummy refresh (search update) to trigger re-render
    $component->set('search', '')
        ->assertSee('sent')
        ->assertDontSee('generated');
});
