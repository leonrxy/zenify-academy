<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'mata_pelajaran',
        'kode_kelas',
    ];

    public function siswas()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa');
    }

    public function instrukturs()
    {
        return $this->belongsToMany(Instruktur::class, 'kelas_instruktur');
    }
}
