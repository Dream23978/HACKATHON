<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Jika user sudah login, redirect ke homepage
        if (Auth::check()) {
            return redirect()->route('homepage');
        }

        return view('Index.Login'); // Tampilkan form login
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Index.Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email', // Menggunakan email untuk login
            'password' => 'required|min:6',
        ]);

        // Autentikasi user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil, redirect ke homepage
            return redirect()->route('homepage')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembali ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->withInput();
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(User $user)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(User $user)
    // {
    //     //
    // }
}
