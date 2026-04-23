<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TrainingEvent;
use App\Models\Participant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::factory()->create([
            'name' => 'DICT Admin',
            'email' => 'admin@dict.gov.ph',
            'password' => bcrypt('password'), // Standard password for testing
        ]);

        // 2. Define Realistic DICT Training Programs
        $programs = [
            [
                'title' => 'Tech4ED Digital Literacy Training',
                'location' => 'Lucena City, Quezon',
                'prefix' => 'T4ED-2026',
            ],
            [
                'title' => 'Cybersecurity Awareness for LGUs',
                'location' => 'Tayabas City Hall',
                'prefix' => 'CYBER-2026',
            ],
            [
                'title' => 'ICT for Public Service Transformation',
                'location' => 'Atimonan Community Center',
                'prefix' => 'ICT-GOV-2026',
            ],
            [
                'title' => 'Digital Transformation Workshop',
                'location' => 'DICT Quezon 4A Office',
                'prefix' => 'DX-WORK-2026',
            ],
            [
                'title' => 'Free Wi-Fi Program Orientation',
                'location' => 'Sariaya Municipal Plaza',
                'prefix' => 'FWIFI-2026',
            ],
        ];

        foreach ($programs as $program) {
            // Create the Event
            $event = TrainingEvent::factory()->create([
                'title' => $program['title'],
                'location' => $program['location'],
                'uuid_prefix' => $program['prefix'],
                'date' => now()->subDays(rand(1, 60))->format('Y-m-d'), // Past events
            ]);

            // Create Participants for each event
            // Some are 'sent', some 'generated', some 'pending'
            Participant::factory(rand(15, 30))->create([
                'training_event_id' => $event->id,
                'status' => 'sent',
                'uuid' => fn() => $program['prefix'] . '-' . strtoupper(Str::random(10)),
            ]);

            Participant::factory(rand(5, 10))->create([
                'training_event_id' => $event->id,
                'status' => 'pending',
                'uuid' => fn() => $program['prefix'] . '-' . strtoupper(Str::random(10)),
            ]);
        }
    }
}
