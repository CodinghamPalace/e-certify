<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VerificationController extends Controller
{
    /**
     * Handle the certificate verification.
     *
     * @param string $uuid
     * @return View
     */
    public function show(string $uuid): View
    {
        $participant = Participant::with('trainingEvent')
            ->where('uuid', $uuid)
            ->first();

        if (!$participant) {
            return view('verification.invalid', [
                'uuid' => $uuid,
            ]);
        }

        return view('verification.success', [
            'participant' => $participant,
            'event' => $participant->trainingEvent,
        ]);
    }
}
