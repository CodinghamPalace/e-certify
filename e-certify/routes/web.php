<?php

use App\Livewire\Events\ManageEvents;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('events', ManageEvents::class)->name('events.index');
});

require __DIR__.'/settings.php';
