<?php

use App\Models\Participant;
use App\Models\TrainingEvent;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use App\Livewire\Dashboard;

uses(RefreshDatabase::class);

test('guests are redirected to the login page', function () {
    $this->get(route('dashboard'))
        ->assertRedirect(route('login'));
});

test('authenticated users can visit the dashboard', function () {
    $user = User::factory()->create();
    
    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertOk();
});

test('it displays correct aggregate statistics', function () {
    $user = User::factory()->create();
    
    // Create 3 events
    TrainingEvent::factory(3)->create();
    
    // Create participants with various statuses
    // 5 total participants - ALL MUST HAVE UUIDs because database requires it
    Participant::factory()->create(['status' => 'sent', 'uuid' => 'UUID-SENT-1']);
    Participant::factory()->create(['status' => 'sent', 'uuid' => 'UUID-SENT-2']);
    Participant::factory()->create(['status' => 'pending', 'uuid' => 'UUID-PENDING-1']);
    Participant::factory()->create(['status' => 'pending', 'uuid' => 'UUID-PENDING-2']);
    Participant::factory()->create(['status' => 'pending', 'uuid' => 'UUID-PENDING-3']);

    Livewire::actingAs($user)
        ->test(Dashboard::class)
        ->assertSee('3') // Total Events
        ->assertSee('5') // Certificates Generated (those with UUIDs)
        ->assertSee('2') // Emails Sent
        ->assertSee('3'); // Pending Emails (status = pending)
});

test('it displays the recent events with correct data', function () {
    $user = User::factory()->create();
    
    $pastEvent = TrainingEvent::factory()->create([
        'title' => 'Past Event',
        'date' => now()->subDays(5),
    ]);
    
    $futureEvent = TrainingEvent::factory()->create([
        'title' => 'Future Event',
        'date' => now()->addDays(5),
    ]);

    Livewire::actingAs($user)
        ->test(Dashboard::class)
        ->assertSee('Past Event')
        ->assertSee('Future Event')
        ->assertSee('Completed')
        ->assertSee('Scheduled');
});

test('it only shows the latest 5 events', function () {
    $user = User::factory()->create();
    
    TrainingEvent::factory(10)->create();
    
    Livewire::actingAs($user)
        ->test(Dashboard::class)
        ->assertViewHas('recentEvents', function ($events) {
            return $events->count() === 5;
        });
});
