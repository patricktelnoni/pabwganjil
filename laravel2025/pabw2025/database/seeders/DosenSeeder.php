<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DosenModel;
use App\Models\MataKuliahModel;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DosenModel::factory()
                ->has(MataKuliahModel::factory()->count(3), 'mataKuliah')
                ->count(100)->create();
    }
}
