<?php

use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guest can access the verification page with a valid uuid', function () {
    $event = TrainingEvent::factory()->create([
        'title' => 'Cybersecurity Workshop',
        'date' => now(),
        'location' => 'Lucena City',
    ]);

    $participant = Participant::factory()->create([
        'training_event_id' => $event->id,
        'name' => 'John Doe',
        'uuid' => 'CERT-12345-ABCDE',
    ]);

    $response = $this->get(route('public.verify', 'CERT-12345-ABCDE'));

    $response->assertStatus(200)
        ->assertViewIs('verification.success')
        ->assertSee('John Doe')
        ->assertSee('Cybersecurity Workshop')
        ->assertSee('Certificate Verified');
});

test('guest sees invalid page for non-existent uuid', function () {
    $response = $this->get(route('public.verify', 'NON-EXISTENT-UUID'));

    $response->assertStatus(200)
        ->assertViewIs('verification.invalid')
        ->assertSee('Invalid Certificate')
        ->assertSee('NON-EXISTENT-UUID');
});

test('verification page displays the correct authority information', function () {
    $participant = Participant::factory()->create();

    $this->get(route('public.verify', $participant->uuid))
        ->assertSee('DICT Quezon 4A Provincial Office')
        ->assertSee('Department of Information and Communications Technology');
});
