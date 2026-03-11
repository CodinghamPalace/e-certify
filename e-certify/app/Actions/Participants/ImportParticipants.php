<?php

namespace App\Actions\Participants;

use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;

class ImportParticipants
{
    /**
     * Import participants from a CSV file.
     *
     * @param TrainingEvent $event
     * @param string $csvFilePath
     * @return int Number of imported participants.
     * @throws Exception
     */
    public function execute(TrainingEvent $event, string $csvFilePath): int
    {
        if (!file_exists($csvFilePath) || !is_readable($csvFilePath)) {
            throw new Exception("The CSV file could not be read.");
        }

        $handle = fopen($csvFilePath, 'r');
        $header = fgetcsv($handle);

        // Basic header validation
        if (!$header || count($header) < 2) {
            fclose($handle);
            throw new Exception("Invalid CSV format. Expected 'Name' and 'Email' columns.");
        }

        // Normalize headers
        $header = array_map(fn($h) => strtolower(trim($h)), $header);
        $nameIndex = array_search('name', $header);
        $emailIndex = array_search('email', $header);

        if ($nameIndex === false || $emailIndex === false) {
            fclose($handle);
            throw new Exception("CSV must contain 'Name' and 'Email' columns.");
        }

        $rows = [];
        $emailsInCsv = [];
        $lineNumber = 1;

        while (($data = fgetcsv($handle)) !== false) {
            $lineNumber++;
            
            // Skip empty rows
            if (empty(array_filter($data))) {
                continue;
            }

            $name = trim($data[$nameIndex] ?? '');
            $email = strtolower(trim($data[$emailIndex] ?? ''));

            // Validation
            $validator = Validator::make(
                ['name' => $name, 'email' => $email],
                [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'email', 'max:255'],
                ]
            );

            if ($validator->fails()) {
                fclose($handle);
                throw new Exception("Validation error on line {$lineNumber}: " . implode(', ', $validator->errors()->all()));
            }

            // Check for duplicate emails within the CSV
            if (in_array($email, $emailsInCsv)) {
                fclose($handle);
                throw new Exception("Duplicate email found in CSV on line {$lineNumber}: {$email}");
            }

            // Check for duplicate emails in the database for this event
            if ($event->participants()->where('email', $email)->exists()) {
                fclose($handle);
                throw new Exception("Participant with email '{$email}' is already registered for this event (Line {$lineNumber}).");
            }

            $emailsInCsv[] = $email;
            $rows[] = [
                'training_event_id' => $event->id,
                'name' => $name,
                'email' => $email,
                'uuid' => $this->generateUuid($event),
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        fclose($handle);

        if (empty($rows)) {
            throw new Exception("The CSV file is empty.");
        }

        return DB::transaction(function () use ($rows) {
            Participant::insert($rows);
            return count($rows);
        });
    }

    /**
     * Generate a unique UUID for a participant.
     */
    protected function generateUuid(TrainingEvent $event): string
    {
        $prefix = $event->uuid_prefix ?: 'CERT';
        $random = strtoupper(Str::random(8));
        $uuid = "{$prefix}-{$random}";

        // Ensure absolute uniqueness (rare collision possibility)
        while (Participant::where('uuid', $uuid)->exists()) {
            $random = strtoupper(Str::random(8));
            $uuid = "{$prefix}-{$random}";
        }

        return $uuid;
    }
}
