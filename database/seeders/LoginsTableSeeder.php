<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class LoginsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('logins')->insert([
        [
            'username' => 'Admin1',
            'password' => '123',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'username' => 'Budi',
            'password' => 'badi123',
            'created_at' => now(),
            'updated_at' => now(),
        ],
       ]);
}
}
