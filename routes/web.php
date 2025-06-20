<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('Index.Login');
})->name('login_aja');

Route::get('/register_user', function () {
    return view('register');
});

Route::get('/reset', function () {
    return view('reset');
})->name('reset');
// Route::get('/login',[LoginController::class,'create']);
Route::post('/Login/store',[LoginController::class,'store'])->name('Login.store');
Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');
Route::get('/Login/create',[LoginController::class,'create'])->name('masuk');

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/daftarsuccess', function () {
    return view('DaftarSucceess');
});

Route::post('/daftar/store', [DaftarController::class, 'store']) -> name ('daftar.store');

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
