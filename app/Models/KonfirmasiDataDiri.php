<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonfirmasiDataDiri extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'confirm_password',
        'first_name',
        'last_name',
        'no_telp',
        'nik',
    ];
}

