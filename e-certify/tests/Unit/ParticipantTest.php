<?php

use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('it belongs to a training event', function () {
    $event = TrainingEvent::factory()->create();
    $participant = Participant::factory()->create(['training_event_id' => $event->id]);

    expect($participant->trainingEvent)->toBeInstanceOf(TrainingEvent::class)
        ->and($participant->trainingEvent->id)->toBe($event->id);
});

test('it has a default status of pending', function () {
    $participant = Participant::factory()->create();

    expect($participant->status)->toBe('pending');
});

test('it can have different statuses', function () {
    $participant = Participant::factory()->create(['status' => 'generated']);
    expect($participant->status)->toBe('generated');

    $participant->update(['status' => 'sent']);
    expect($participant->status)->toBe('sent');
});
