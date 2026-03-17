<?php

use App\Models\TrainingEvent;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create();
});

test('it requires authentication to access manage events', function () {
    $this->get(route('events.index'))
        ->assertRedirect(route('login'));
});

test('it can list training events', function () {
    $event = TrainingEvent::factory()->create(['title' => 'Sample Training']);

    $this->actingAs($this->user)
        ->get(route('events.index'))
        ->assertStatus(200)
        ->assertSee('Sample Training');
});

test('it can search training events', function () {
    TrainingEvent::factory()->create(['title' => 'Searchable Event']);
    TrainingEvent::factory()->create(['title' => 'Hidden Event']);

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->set('search', 'Searchable')
        ->assertSee('Searchable Event')
        ->assertDontSee('Hidden Event');
});

test('it can create a training event via modal', function () {
    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('create')
        ->set('title', 'New Event')
        ->set('date', '2026-04-15')
        ->set('uuid_prefix', 'NEW-')
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('showModal', false);

    $this->assertDatabaseHas('training_events', ['title' => 'New Event']);
});

test('it can update a training event via modal', function () {
    $event = TrainingEvent::factory()->create(['title' => 'Old Title']);

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('edit', $event->id)
        ->set('title', 'Updated Title')
        ->call('save')
        ->assertHasNoErrors()
        ->assertSet('showModal', false);

    expect($event->fresh()->title)->toBe('Updated Title');
});

test('it can delete a training event', function () {
    $event = TrainingEvent::factory()->create();

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('confirmDelete', $event->id)
        ->assertSet('showDeleteModal', true)
        ->assertSet('eventToDelete', $event->id)
        ->call('delete')
        ->assertSet('showDeleteModal', false)
        ->assertSet('eventToDelete', null)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('training_events', ['id' => $event->id]);
});

test('it handles database errors during deletion', function () {
    $event = TrainingEvent::factory()->create();

    // We can simulate a failure by deleting it from the DB first
    // or by mocking the model. For simplicity, we'll just ensure
    // the component doesn't crash if the event is already gone.
    $event->delete();

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('confirmDelete', 999) // Non-existent ID
        ->call('delete')
        ->assertHasNoErrors(); // It should handle it gracefully
});

test('it validates event creation', function () {
    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('create')
        ->set('title', '') // Empty title
        ->set('date', 'invalid-date')
        ->call('save')
        ->assertHasErrors(['title' => 'required', 'date' => 'date'])
        ->assertSet('showModal', true); // Modal should remain open
});

test('it validates unique uuid prefix on creation', function () {
    TrainingEvent::factory()->create(['uuid_prefix' => 'EXISTING-']);

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->call('create')
        ->set('title', 'New Event')
        ->set('date', '2026-04-15')
        ->set('uuid_prefix', 'EXISTING-')
        ->call('save')
        ->assertHasErrors(['uuid_prefix' => 'unique'])
        ->assertSet('showModal', true);
});

test('it displays empty state when no search results are found', function () {
    TrainingEvent::factory()->create(['title' => 'Sample Event']);

    Livewire::actingAs($this->user)
        ->test(\App\Livewire\Events\ManageEvents::class)
        ->set('search', 'Non-existent Query')
        ->assertSee('No events found')
        ->assertSee('Try adjusting your search')
        ->assertDontSee('Sample Event');
});

