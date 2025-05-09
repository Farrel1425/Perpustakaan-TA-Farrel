<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];

    public function anggota()
    {
        return $this->hasOne(Anggota::class, 'id_pengguna');
    }

    public function petugas()
    {
        return $this->hasOne(Petugas::class, 'id_pengguna');
    }
}
