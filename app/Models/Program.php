<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'harga',
        'jangka_waktu',
        'waktu_pertemuan',
        'deskripsi',
        'info_1',
        'na_info_1',
        'info_2',
        'na_info_2',
        'info_3',
        'na_info_3',
        'style',
        'label',
        'info_label',
    ];
}
