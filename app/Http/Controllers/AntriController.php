<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntriController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        return view('cek-antrian', [
            'name' => $user->name,
            'registration_number' => $user->registration_number,
            'province' => $user->pilih_provinsi,
            'hospital' => $user->pilih_rumah_sakit,
            'polyclinic' => $user->pilih_poli,
            'queue_position' => 3,
            'estimated_wait_time' => '15 menit'
        ]);
    }
}