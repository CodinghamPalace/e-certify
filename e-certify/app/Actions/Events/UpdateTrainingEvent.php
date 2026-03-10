<?php

namespace App\Actions\Events;

use App\Models\TrainingEvent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdateTrainingEvent
{
    /**
     * Validate and update the given training event.
     *
     * @param  array<string, mixed>  $input
     */
    public function update(TrainingEvent $event, array $input): void
    {
        Validator::make($input, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'date' => ['required', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'template_path' => ['nullable', 'string', 'max:255'],
            'uuid_prefix' => [
                'required',
                'string',
                'max:20',
                Rule::unique('training_events')->ignore($event->id),
            ],
        ])->validate();

        $event->update([
            'title' => $input['title'],
            'description' => $input['description'] ?? null,
            'date' => $input['date'],
            'location' => $input['location'] ?? null,
            'template_path' => $input['template_path'] ?? null,
            'uuid_prefix' => strtoupper($input['uuid_prefix']),
        ]);
    }
}
