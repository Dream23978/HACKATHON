<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\http\Controllers\LoginController;

Route::get('/', function () {
    return view('Index.Login');
})->name('login');

Route::get('/reset', function () {
    return view('reset');
})->name('reset');
// Route::get('/login',[LoginController::class,'create']);
Route::post('/Login/store',[LoginController::class,'store'])->name('Login.store');
Route::get('/Login/create',[LoginController::class,'create'])->name('masuk');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
