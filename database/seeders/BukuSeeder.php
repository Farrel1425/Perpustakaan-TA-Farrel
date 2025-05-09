<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run()
    {
        Buku::create([
            'judul' => 'The Great Gatsby',
            'pengarang' => 'F. Scott Fitzgerald',
            'penerbit' => 'Scribner',
            'tahun_terbit' => 1925,
            'jumlah' => 5,
            'id_kategori' => 1, // Menyertakan ID kategori yang sesuai
        ]);

        Buku::create([
            'judul' => 'A Brief History of Time',
            'pengarang' => 'Stephen Hawking',
            'penerbit' => 'Bantam Books',
            'tahun_terbit' => 1988,
            'jumlah' => 3,
            'id_kategori' => 2,
        ]);
    }
}
