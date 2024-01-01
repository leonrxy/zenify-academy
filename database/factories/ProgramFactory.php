<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'harga' => $this->faker->randomNumber(),
            'jangka_waktu' => $this->faker->word,
            'jml_pertemuan' => $this->faker->randomNumber(),
            'waktu_pertemuan' => $this->faker->randomNumber(),
            'info_1' => $this->faker->sentence,
            'na_info_1' => $this->faker->sentence,
            'info_2' => $this->faker->sentence,
            'na_info_2' => $this->faker->sentence,
            'info_3' => $this->faker->sentence,
            'na_info_3' => $this->faker->sentence,
            'style' => $this->faker->word,
            'label' => $this->faker->word,
            'info_label' => $this->faker->sentence,
        ];
    }
}
