<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('Index.Login');
})->name('login_user');
Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/register_user', function () {
    return view('register');
});

Route::get('/reset', function () {
    return view('reset');
})->name('reset');
// Route::get('/login',[LoginController::class,'create']);
Route::post('/login/store',[LoginController::class,'store'])->name('login_store');
Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');
Route::get('/Login/create',[LoginController::class,'create'])->name('masuk');

Route::get('/home', function () {
    return view('homepage');
})->name('homepage');

Route::get('/daftar', function () {
    return view('Daftar');
});
Route::get('/daftarsuccess', function () {
    return view('DaftarSuccess');
});

Route::post('/daftar/store', [DaftarController::class, 'store']) -> name ('daftar.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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
