<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    // Pastikan user sudah login
    if(auth()->check()) {
        $name = auth()->user()->name;
        return view('homepage', ['name' => $name]);
    }

    return redirect()->route('login_user');
}

}
