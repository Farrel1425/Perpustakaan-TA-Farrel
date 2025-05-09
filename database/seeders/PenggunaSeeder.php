<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        Pengguna::create([
            'nama' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'), // Enkripsi password
            'role' => 'admin',
        ]);

        Pengguna::create([
            'nama' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => bcrypt('password123'),
            'role' => 'anggota',
        ]);
    }
}
