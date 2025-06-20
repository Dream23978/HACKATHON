<?php

namespace App\Http\Controllers;

use App\Models\logins;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftarsuccess');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pilih_provinsi' => 'required',
            'pilih_rumah_sakit' => 'required',
            'pilih_poli' => 'required'
        ]);
        
        logins::create($request -> all());
        return view('daftarsuccess');
    }
}
