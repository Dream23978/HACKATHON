<?php

namespace App\Http\Controllers;

use App\Models\logins;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request ->validate([
            'username' => 'required|string|max:100',
            'password' => 'required|min:6|',
        ]);
        logins::create($request -> all());
        // return view('index.login');
        return redirect()->route('login_aja');
    }
}
