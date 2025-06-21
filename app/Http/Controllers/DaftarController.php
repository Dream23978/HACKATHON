<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('DaftarSuccess');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pilih_provinsi' => 'required',
            'pilih_rumah_sakit' => 'required',
            'pilih_poli' => 'required'
        ]);

        User::updating($request -> all());
        return view('DaftarSuccess');
    }
}
