<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingEvent>
 */
class TrainingEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'location' => $this->faker->city(),
            'template_path' => 'templates/default.pdf',
            'uuid_prefix' => strtoupper($this->faker->lexify('????')) . '-',
        ];
    }
}
