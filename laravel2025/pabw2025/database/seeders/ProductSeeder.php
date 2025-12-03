<?php
// PRODUKTIFITAS
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\RatingProduct;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->has(RatingProduct::factory()->count(5), 'ratings')
            ->count(1000)->create();
    }
}
