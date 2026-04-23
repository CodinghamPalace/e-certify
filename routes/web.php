<?php

use App\Http\Controllers\VerificationController;
use App\Livewire\Events\ManageEvents;
use App\Livewire\Events\ManageParticipants;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login')->name('home');

// Public Verification Route
Route::get('/verify/{uuid}', [VerificationController::class, 'show'])->name('public.verify');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('events', ManageEvents::class)->name('events.index');
    Route::get('events/{event}/participants', ManageParticipants::class)->name('events.participants');
});

require __DIR__.'/settings.php';
