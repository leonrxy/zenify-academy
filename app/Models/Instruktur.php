<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
     use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'tgl_lahir',
        'jenis_kelamin',
        'alamat',
        'mata_pelajaran',
        'kelas_diajar',
        'foto_profil',
    ];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_instruktur');
    }
}
