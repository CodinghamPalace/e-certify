<?php

use App\Models\Participant;
use App\Models\TrainingEvent;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use App\Livewire\Events\ManageParticipants;
use Illuminate\Http\UploadedFile;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->event = TrainingEvent::factory()->create(['title' => 'Test Event']);
});

test('it can access the participants page', function () {
    $this->actingAs($this->user)
        ->get(route('events.participants', $this->event))
        ->assertStatus(200)
        ->assertSee('Participants: Test Event');
});

test('it lists participants for the specific event', function () {
    $participant = Participant::factory()->create(['training_event_id' => $this->event->id, 'name' => 'Event User']);
    $otherParticipant = Participant::factory()->create(['name' => 'Other User']);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->assertSee('Event User')
        ->assertDontSee('Other User');
});

test('it can search participants by name or email', function () {
    Participant::factory()->create(['training_event_id' => $this->event->id, 'name' => 'John Doe', 'email' => 'john@example.com']);
    Participant::factory()->create(['training_event_id' => $this->event->id, 'name' => 'Jane Smith', 'email' => 'jane@example.com']);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->set('search', 'John')
        ->assertSee('John Doe')
        ->assertDontSee('Jane Smith')
        ->set('search', 'jane@example.com')
        ->assertSee('Jane Smith')
        ->assertDontSee('John Doe');
});

test('it can upload a valid CSV file', function () {
    $csvContent = "Name,Email\nAlice Blue,alice@example.com\nBob Green,bob@example.com";
    $file = UploadedFile::fake()->createWithContent('participants.csv', $csvContent);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->set('csvFile', $file)
        ->call('import')
        ->assertHasNoErrors()
        ->assertSee('Successfully imported 2 participants');

    expect(Participant::where('training_event_id', $this->event->id)->count())->toBe(2);
});

test('it validates the CSV file headers', function () {
    $csvContent = "Wrong,Header\nAlice Blue,alice@example.com";
    $file = UploadedFile::fake()->createWithContent('participants.csv', $csvContent);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->set('csvFile', $file)
        ->call('import')
        ->assertHasErrors(['csvFile']);

    expect(Participant::count())->toBe(0);
});

test('it can download a sample CSV file', function () {
    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->call('downloadSample')
        ->assertStatus(200)
        ->assertFileDownloaded('participants_sample.csv');
});

test('it can update a participant', function () {
    $participant = Participant::factory()->create(['training_event_id' => $this->event->id, 'name' => 'Old Name']);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->call('edit', $participant->id)
        ->set('editingName', 'New Name')
        ->call('update')
        ->assertHasNoErrors()
        ->assertSee('Participant updated successfully');

    expect($participant->fresh()->name)->toBe('New Name');
});

test('it can delete a participant', function () {
    $participant = Participant::factory()->create(['training_event_id' => $this->event->id]);

    Livewire::actingAs($this->user)
        ->test(ManageParticipants::class, ['event' => $this->event])
        ->call('confirmDelete', $participant->id)
        ->call('delete')
        ->assertSee('Participant removed successfully');

    expect(Participant::find($participant->id))->toBeNull();
});
