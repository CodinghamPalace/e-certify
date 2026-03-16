<?php

use App\Actions\Participants\ImportParticipants;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->action = new ImportParticipants();
    $this->event = TrainingEvent::factory()->create(['uuid_prefix' => 'TEST-2026']);
});

function createCsv(array $rows): string
{
    $path = tempnam(sys_get_temp_dir(), 'csv');
    $handle = fopen($path, 'w');
    foreach ($rows as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    return $path;
}

test('it can import participants from a valid CSV', function () {
    $csvPath = createCsv([
        ['Name', 'Email'],
        ['John Doe', 'john@example.com'],
        ['Jane Smith', 'jane@example.com'],
    ]);

    $count = $this->action->execute($this->event, $csvPath);

    expect($count)->toBe(2);
    expect(Participant::count())->toBe(2);
    
    $participant = Participant::where('email', 'john@example.com')->first();
    expect($participant->name)->toBe('John Doe');
    expect($participant->training_event_id)->toBe($this->event->id);
    expect($participant->uuid)->toStartWith('TEST-2026-');
    
    unlink($csvPath);
});

test('it throws exception for invalid headers', function () {
    $csvPath = createCsv([
        ['Wrong', 'Header'],
        ['John Doe', 'john@example.com'],
    ]);

    expect(fn() => $this->action->execute($this->event, $csvPath))
        ->toThrow(Exception::class, "CSV must contain 'Name' and 'Email' columns.");

    unlink($csvPath);
});

test('it rolls back transaction if any row fails validation', function () {
    $csvPath = createCsv([
        ['Name', 'Email'],
        ['Valid User', 'valid@example.com'],
        ['Invalid Email', 'not-an-email'],
    ]);

    expect(fn() => $this->action->execute($this->event, $csvPath))
        ->toThrow(Exception::class);

    // Should be 0 due to rollback
    expect(Participant::count())->toBe(0);

    unlink($csvPath);
});

test('it prevents duplicate emails in the same CSV', function () {
    $csvPath = createCsv([
        ['Name', 'Email'],
        ['User 1', 'duplicate@example.com'],
        ['User 2', 'duplicate@example.com'],
    ]);

    expect(fn() => $this->action->execute($this->event, $csvPath))
        ->toThrow(Exception::class, "Duplicate email found in CSV");

    unlink($csvPath);
});

test('it prevents duplicate emails for the same event in database', function () {
    Participant::factory()->create([
        'training_event_id' => $this->event->id,
        'email' => 'exists@example.com',
    ]);

    $csvPath = createCsv([
        ['Name', 'Email'],
        ['New User', 'exists@example.com'],
    ]);

    expect(fn() => $this->action->execute($this->event, $csvPath))
        ->toThrow(Exception::class, "is already registered for this event");

    unlink($csvPath);
});

test('it allows the same email for different events', function () {
    $otherEvent = TrainingEvent::factory()->create();
    Participant::factory()->create([
        'training_event_id' => $otherEvent->id,
        'email' => 'shared@example.com',
    ]);

    $csvPath = createCsv([
        ['Name', 'Email'],
        ['Same User', 'shared@example.com'],
    ]);

    $count = $this->action->execute($this->event, $csvPath);

    expect($count)->toBe(1);
    expect(Participant::where('email', 'shared@example.com')->count())->toBe(2);

    unlink($csvPath);
});
