<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamMedis;

class KonfirmasiDataDiriController extends Controller
{
    public function index()
    {
        $konfirmasiDataDiri = KonfirmasiDataDiri::all();
        return view('index', compact('konfirmasiDataDiri'));
    }

}
