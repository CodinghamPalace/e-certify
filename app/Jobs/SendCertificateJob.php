<?php

namespace App\Jobs;

use App\Mail\CertificateMail;
use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendCertificateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     */
    public $tries = 3;

    /**
     * The number of seconds to wait before retrying the job.
     */
    public $backoff = [60, 300, 600];

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Participant $participant,
        public string $filePath
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->participant->email)->send(
            new CertificateMail($this->participant, $this->filePath)
        );

        $this->participant->update(['status' => 'sent']);
    }
}
