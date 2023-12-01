<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Faker\Factory as Faker;

class CreateSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $data = [
                'nama_lengkap' => $faker->name,
                'email' => $faker->unique()->email,
                'nohp' => $faker->phoneNumber,
                'tgl_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'asal_sekolah' => $faker->company,
                'alamat' => $faker->address,
                'program' => $faker->word,
                'waktuprogram' => $faker->word,
                'foto_diri' => $faker->imageUrl(),
                'waktu' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Gunakan metode updateOrCreate untuk memastikan data unik berdasarkan email
            Siswa::updateOrCreate(['email' => $data['email']], $data);
        }
    }
}
