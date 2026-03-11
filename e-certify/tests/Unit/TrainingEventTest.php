<?php

use App\Models\TrainingEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

test('it can create a training event', function () {
    $event = TrainingEvent::factory()->create([
        'title' => 'Test Training Event',
        'uuid_prefix' => 'TEST-',
    ]);

    expect($event->title)->toBe('Test Training Event');
    expect($event->uuid_prefix)->toBe('TEST-');
    $this->assertDatabaseHas('training_events', [
        'title' => 'Test Training Event',
        'uuid_prefix' => 'TEST-',
    ]);
});

test('it casts date to a date object', function () {
    $event = TrainingEvent::factory()->create([
        'date' => '2026-03-10',
    ]);

    expect($event->date)->toBeInstanceOf(Carbon\CarbonInterface::class);
    expect($event->date->format('Y-m-d'))->toBe('2026-03-10');
});
