<?php

namespace App\Actions\Events;

use App\Models\TrainingEvent;
use Illuminate\Support\Facades\Validator;

class CreateTrainingEvent
{
    /**
     * Validate and create a new training event.
     *
     * @param  array<string, mixed>  $input
     */
    public function create(array $input): TrainingEvent
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'template_path' => ['nullable', 'string', 'max:255'],
            'uuid_prefix' => ['required', 'string', 'max:20', 'unique:training_events,uuid_prefix'],
        ])->validate();

        return TrainingEvent::create([
            'title' => $input['title'],
            'description' => $input['description'] ?? null,
            'date' => $input['date'],
            'location' => $input['location'] ?? null,
            'template_path' => $input['template_path'] ?? null,
            'uuid_prefix' => strtoupper($input['uuid_prefix']),
        ]);
    }
}
