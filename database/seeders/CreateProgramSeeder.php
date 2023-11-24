<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class CreateProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'nama' => 'Reguler Online',
                'harga' => '800000',
                'jangka_waktu' => 'Bulan',
                'jml_pertemuan' => '3',
                'waktu_pertemuan' => '90',
                'info_1' => '5 Orang/Kelas',
                'na_info_1' => '',
                'info_2' => 'Konseling Privat Via Chat dan Zoom',
                'na_info_2' => '',
                'info_3' => 'Bonus Modul Cetak', 
                'na_info_3' => '', 
                'style' => 'Normal',
                'label' => 'y',
                'info_label' => 'DISKON 15%',
            ],
            [
                'nama' => 'Reguler',
                'harga' => '400000',
                'jangka_waktu' => 'Bulan',
                'jml_pertemuan' => '3',
                'waktu_pertemuan' => '90',
                'info_1' => '10 Orang/Kelas',
                'na_info_1' => '',
                'info_2' => 'Konseling Privat Via Chat dan Zoom',
                'na_info_2' => '',
                'info_3' => 'Bonus Modul Cetak', 
                'na_info_3' => '', 
                'style' => 'Normal',
                'label' => 'y',
                'info_label' => 'DISKON 10%',
            ],
        ];

        foreach ($programs as $key => $program) {
            Program::updateOrCreate(
                ['nama' => $program['nama']],
                $program
            );
        }
    }
}
