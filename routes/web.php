<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\RekamMedisController;

Route::get('/', function () {
    return view('index');
})->name('rekammedis');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::get('/konfirmasi-data-diri', [KonfirmasiDataDiriController::class, 'index'])->name('konfirmasi-data-diri.index');
// Route::get('/rekam-medis/create', [RekamMedisController::class, 'create'])->name('rekam-medis.create');
// Route::post('/rekam-medis', [RekamMedisController::class, 'store'])->name('rekam-medis.store');
// Route::post('/rekam-medis/search', [RekamMedisController::class, 'search'])->name('rekam-medis.search');
