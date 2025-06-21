<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Models\User; // Pastikan model User diimpor
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Import Auth facade
use Illuminate\Support\Facades\Hash;  // Import Hash facade

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',  // Validasi untuk nama
            'email' => 'required|email|unique:users,email',  // Validasi untuk email
            'password' => 'required|min:6',  // Validasi untuk password
            'nik' => 'required|min:16',  // Validasi untuk password
        ]);

        // Proses pendaftaran atau login
        // Misalnya, jika Anda ingin menyimpan pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->nik = $request->nik;
        // $user->_token = $request->_token;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Hash password
        $user->save();

        // Redirect setelah berhasil
        return redirect()->route('login_user')->with('success', 'Registrasi berhasil!');
    }
}
