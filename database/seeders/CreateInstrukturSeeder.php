<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instruktur;

class CreateInstrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed data for the Instruktur model
        Instruktur::updateOrCreate([
            'nama' => 'Instruktur 1',
            'email' => 'instruktur1@example.com',
            'nohp' => '08123456789',
            'tgl_lahir' => '1990-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Alamat Instruktur 1',
            'mata_pelajaran' => 'Matematika',
            'kelas_diajar' => 'M01',
            'foto_profil' => 'https://smpn27sby.sch.id/guru/blank.jpg',
        ]);

        Instruktur::updateOrCreate([
            'nama' => 'Instruktur 2',
            'email' => 'instruktur2@example.com',
            'nohp' => '08123456788',
            'tgl_lahir' => '1991-02-02',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Alamat Instruktur 2',
            'mata_pelajaran' => 'Fisika',
            'kelas_diajar' => 'F01',
            'foto_profil' => 'https://smpn27sby.sch.id/guru/blank.jpg',
        ]);

        // Add more Instruktur data if needed
    }
}
