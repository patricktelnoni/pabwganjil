<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DosenModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // PRODUKTIFITAS 
        return [
            //
            "nama_dosen" => $this->faker->name(),
            "nipdosen"  => $this->faker->randomDigitNotNull(),
        ];
    }
}
