<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailPeminjaman;

class DetailPeminjamanSeeder extends Seeder
{
    public function run()
    {
        DetailPeminjaman::create([
            'id_peminjaman' => 1,  // id_peminjaman yang merujuk ke peminjaman
            'id_buku' => 1,  // id_buku yang merujuk ke buku
        ]);
    }
}
