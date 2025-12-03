<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DosenModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliahModel>
 */
class MataKuliahModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama_mata_kuliah' => $this->faker->word(),
            'kode_mata_kuliah' => $this->faker->word(),
            'dosen_id' => DosenModel::factory(),
            'sks' => $this->faker->randomDigitNotNull(),
        ];
    }
}
