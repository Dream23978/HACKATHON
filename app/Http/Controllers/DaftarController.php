<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

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

        User::query()
            ->update($request -> all());
        // User::update($request -> all());
        // User::find()
        //     ->update([
        //         'pilih_provinsi' => 'pilih_provinsi',
        //         'pilih_rumah_sakit' => 'pilih_rumah_sakit',
        //         'pilih_poli' => 'pilih_poli',
        //     ]);

        // $user->fill([
        //     'pilih_provinsi' => 'value',
        //     'pilih_rumah_sakit' => 'value',
        //     'pilih_poli' => 'value',
        // ])->save();

        return view('DaftarSuccess');
    }
}
