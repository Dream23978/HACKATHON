<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // if (auth()->check()) {
        //     $name = auth()->user()->name;
        //     return view('homepage', ['name' => $name]);
        // }
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login_user');
        }

        return redirect()->route('homepage');
    }
}
