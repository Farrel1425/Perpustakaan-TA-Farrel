<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        Peminjaman::create([
            'id_anggota' => 1,  // id_anggota yang merujuk ke anggota
            'id_petugas' => 1,  // id_petugas yang merujuk ke petugas
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => now()->addDays(7),
        ]);
    }
}
