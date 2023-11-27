<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'place_of_birth' => 'Nazijerman', // Gantilah dengan tempat lahir yang sesuai
            'date_of_birth' => '2006-07-17', // Gantilah dengan tanggal lahir yang sesuai
            'phone' => '081649337297', // Gantilah dengan nomor telepon yang sesuai
            'address' => 'jl.megaindah', // Gantilah dengan alamat yang sesuai
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
    
}
