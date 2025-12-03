<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'nama_produk'   => $this->faker->word(),   
            'harga_produk'  => $this->faker->randomNumber(5),
            'foto_produk'   => $this->faker->imageUrl(640, 480, true),
        ];
    }
}
