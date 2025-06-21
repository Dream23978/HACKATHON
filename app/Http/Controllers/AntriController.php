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
            return redirect()->route('login_user');
        }
        // <option value="prov_none">Pilih Provinsi</option>
        // <option value="kaltim">Kalimantan Timur</option>
        // <option value="kalsel">Kalimantan Selatan</option>
        // <option value="kaltu">Kalimantan Utara</option>
        // <option value="kalteng">Kalimantan Tengah</option>
        // $pilihan_provinsi

        if ($user->pilih_provinsi == 'kalbar') {
            $user->pilih_provinsi = 'Kalimantan Barat';
        } else if ($user->pilih_provinsi == 'kaltim') {
            $user->pilih_provinsi = 'Kalimantan Timur';
        } else if ($user->pilih_provinsi == 'kalsel') {
            $user->pilih_provinsi = 'Kalimantan Selatan';
        } else if ($user->pilih_provinsi == 'kaltu') {
            $user->pilih_provinsi = 'Kalimantan Utara';
        } else if ($user->pilih_provinsi == 'kalteng') {
            $user->pilih_provinsi = 'Kalimantan Tengah';
        } else if ($user->pilih_provinsi == 'prov_null') {
            $user->pilih_provinsi = 'Belum Memilih Provinsi';
        }

        if ($user->pilih_rumah_sakit == 'rs_a') {
            $user->pilih_rumah_sakit = 'Rumah Sakit A';
        } else if ($user->pilih_ruh_sakit == 'rs_b') {
            $user->pilih_rumah_sakit = 'Rumah Sakit B';
        } else if ($user->pilih_rumah_sakit == 'rs_c') {
            $user->pilih_rumah_sakit = 'Rumah Sakit C';
        } else if ($user->pilih_rumah_sakit == 'rs_d') {
            $user->pilih_rumah_sakit = 'Rumah Sakit D';
        } else if ($user->pilih_rumah_sakit == 'rs_e') {
            $user->pilih_rumah_sakit = 'Rumah Sakit E';
        } else if ($user->pilih_rumah_sakit == 'rs_null') {
            $user->pilih_rumah_sakit = 'Belum Memilih Rumah Sakit';
        }

        if ($user->pilih_poli == 'poli_anak') {
            $user->pilih_poli = 'Poli Anak';
        } else if ($user->pilih_poli == 'poli_mata') {
            $user->pilih_poli = 'Poli Mata';
        } else if ($user->pilih_poli == 'poli_bidan') {
            $user->pilih_poli = 'Poli Bidan';
        } else if ($user->pilih_poli == 'poli_gigi') {
            $user->pilih_poli = 'Poli Gigi';
        } else if ($user->pilih_poli == 'poli_saraf') {
            $user->pilih_poli = 'Poli Saraf';
        } else if ($user->pilih_poli == 'poli_null') {
            $user->pilih_poli = 'Belum Memilih Poli';
        }

        return view('statusAntrian', [
            'name' => $user->name,
            'registration_number' => $user->registration_number,
            'pilih_provinsi' => $user->pilih_provinsi,
            'pilih_rumah_sakit' => $user->pilih_rumah_sakit,
            'pilih_poli' => $user->pilih_poli,
            'queue_position' => 3,
            'estimated_wait_time' => '15 menit'
        ]);
        // 'pilih_rumah_sakit' => 'Rumah Sakit A'
        // 'pilih_poli' =>,
        // } else {
        // if ($user->pilih_rumah_sakit == 'rs_a') {
        //     return view('statusAntrian', [
        //             'name' => $user->name,
        //             'registration_number' => $user->registration_number,
        //             'pilih_provinsi' => 'Kalimantan Barat',
        //         ]);
        //     }
        // }
        return view('statusAntrian', [
            'name' => $user->name,
        ]);
    }
}

// 'pilih_provinsi' => $user->pilih_provinsi,
// 'pilih_rumah_sakit' => $user->pilih_rumah_sakit,
// 'pilih_poli' => $user->pilih_poli,
