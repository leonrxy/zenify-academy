<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Instruktur;

class CreateKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kelas1 = Kelas::updateOrCreate([
            'nama' => 'Matematika',
            'hari' => 'Senin',
            'jam_mulai' => '08:00',
            'jam_selesai' => '10:00',
            'mata_pelajaran' => 'Matematika',
            'kode_kelas' => 'M01',
        ]);

        $kelas2 = Kelas::updateOrCreate([
            'nama' => 'Fisika',
            'hari' => 'Selasa',
            'jam_mulai' => '10:00',
            'jam_selesai' => '12:00',
            'mata_pelajaran' => 'Fisika',
            'kode_kelas' => 'F01',
        ]);

        // Find a siswa and an instruktur (Update with the appropriate IDs)
        $siswa1 = Siswa::find(1);
        $instruktur1 = Instruktur::find(1);
        $siswa2 = Siswa::find(2);
        $instruktur2 = Instruktur::find(2);

        // Attach siswa and instruktur to the first kelas
        $kelas1->siswas()->attach($siswa1->id);
        $kelas1->instrukturs()->attach($instruktur1->id);

        // Attach siswa and instruktur to the second kelas
        $kelas2->siswas()->attach($siswa2->id);
        $kelas2->instrukturs()->attach($instruktur2->id);
    }
}
