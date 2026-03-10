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
        ->call('delete', $event->id);

    $this->assertDatabaseMissing('training_events', ['id' => $event->id]);
});
