<?php

use App\Actions\Events\CreateTrainingEvent;
use App\Actions\Events\UpdateTrainingEvent;
use App\Models\TrainingEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;

uses(RefreshDatabase::class);

test('it can create a training event via action', function () {
    $action = new CreateTrainingEvent();
    $input = [
        'title' => 'New Action Event',
        'date' => '2026-05-20',
        'uuid_prefix' => 'ACT-',
    ];

    $event = $action->create($input);

    expect($event)->toBeInstanceOf(TrainingEvent::class);
    expect($event->title)->toBe('New Action Event');
    expect($event->uuid_prefix)->toBe('ACT-');
    $this->assertDatabaseHas('training_events', ['title' => 'New Action Event']);
});

test('it validates required fields for creation', function () {
    $action = new CreateTrainingEvent();
    $action->create([]);
})->throws(ValidationException::class);

test('it validates unique uuid_prefix for creation', function () {
    TrainingEvent::factory()->create(['uuid_prefix' => 'DUPE-']);
    
    $action = new CreateTrainingEvent();
    $action->create([
        'title' => 'Another Event',
        'date' => '2026-05-20',
        'uuid_prefix' => 'DUPE-',
    ]);
})->throws(ValidationException::class);

test('it can update a training event via action', function () {
    $event = TrainingEvent::factory()->create(['title' => 'Old Title']);
    $action = new UpdateTrainingEvent();
    $input = [
        'title' => 'Updated Title',
        'date' => '2026-06-01',
        'uuid_prefix' => 'UPD-',
    ];

    $action->update($event, $input);

    expect($event->fresh()->title)->toBe('Updated Title');
    $this->assertDatabaseHas('training_events', ['title' => 'Updated Title']);
});

test('it allows keeping the same uuid_prefix when updating', function () {
    $event = TrainingEvent::factory()->create(['uuid_prefix' => 'SAME-']);
    $action = new UpdateTrainingEvent();
    
    $action->update($event, [
        'title' => 'Updated Title',
        'date' => '2026-06-01',
        'uuid_prefix' => 'SAME-',
    ]);

    expect($event->fresh()->uuid_prefix)->toBe('SAME-');
});
