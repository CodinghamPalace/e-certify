<?php

namespace App\Actions\Participants;

use App\Jobs\SendCertificateJob;
use App\Models\Participant;
use App\Models\TrainingEvent;
use Illuminate\Support\Facades\Storage;

class QueueCertificateEmail
{
    /**
     * Execute the action for a single participant.
     */
    public function execute(Participant $participant): void
    {
        // For MVP, we assume the certificate exists at a standard path if status is 'generated'
        // In the next phase, this path will be dynamically resolved from the storage
        $filePath = storage_path("app/public/certificates/{$participant->uuid}.pdf");

        // Temporary check for development/demo purposes
        if (!file_exists($filePath)) {
            // Create a placeholder if it doesn't exist for testing the UI flow
            if (!is_dir(dirname($filePath))) {
                mkdir(dirname($filePath), 0755, true);
            }
            file_put_contents($filePath, "Placeholder certificate for {$participant->name}");
        }

        SendCertificateJob::dispatch($participant, $filePath);
    }

    /**
     * Execute the action for all participants with 'generated' status in an event.
     */
    public function executeBulk(TrainingEvent $event): int
    {
        $participants = $event->participants()->where('status', 'generated')->get();
        
        foreach ($participants as $participant) {
            $this->execute($participant);
        }

        return $participants->count();
    }
}
