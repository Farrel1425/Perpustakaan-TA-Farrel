<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas; // Pastikan ada 'use' untuk Petugas

class PetugasSeeder extends Seeder
{
    public function run()
    {
        Petugas::create([
            'id_pengguna' => 1,  // ID pengguna yang berhubungan dengan pengguna
            'nip' => 'NIP12345',
            'jabatan' => 'Librarian',
        ]);
    }
}
