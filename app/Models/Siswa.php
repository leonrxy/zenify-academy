<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap', 'email', 'nohp', 'tgl_lahir', 'jenis_kelamin',
        'asal_sekolah', 'alamat', 'program', 'waktuprogram', 'foto_diri', 'waktu',
    ];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_siswa');
    }
}
