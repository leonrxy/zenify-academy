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
        'jml_pertemuan',
        'waktu_pertemuan',
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

    // Mutator untuk atribut 'harga'
    public function setHargaAttribute($value)
    {
        $this->attributes['harga'] = str_replace(',', '', $value);
    }

    // Accessor untuk atribut 'harga'
    public function getHargaAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }
}
