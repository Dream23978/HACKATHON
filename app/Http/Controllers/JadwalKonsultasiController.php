<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalKonsultasiController extends Controller
{
    public function index()
    {
        // Fetch consultation schedules from the database
        $schedules = ::all();  // Adjust this query as needed

        // Pass schedules data to the view
        return view('jadwal_konsul', [
            'schedules' => $schedules
        ]);
        // return view('jadwalKonsul');
    }
}
