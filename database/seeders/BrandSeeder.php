<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    $brands = [
        'BMW',
        'Mercedes-Benz',
        'Audi',
        'Toyota',
        'Honda',
        'Land Rover',
        'Porsche',
        'Jaguar',
        'Lexus',
        'Volkswagen',
    ];

    foreach ($brands as $brand) {
        Brand::create([
            'name' => $brand,
            'slug' => Str::slug($brand),
        ]);
    }
}
}
