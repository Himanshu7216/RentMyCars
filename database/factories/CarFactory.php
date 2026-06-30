<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;
/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $carName = fake()->randomElement([
            'BMW 7 Series',
            'Mercedes S Class',
            'Audi A6',
            'Range Rover Vogue',
            'Toyota Fortuner',
            'Honda City',
            'Porsche Cayenne',
            'Jaguar XF',
            'Lexus ES',
            'Volkswagen Tiguan',
        ]);

        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,

            'name' => $carName,
            'slug' => Str::slug($carName . '-' . fake()->unique()->numberBetween(100, 999)),

            'model_year' => fake()->numberBetween(2020, 2026),

            'transmission' => fake()->randomElement([
                'manual',
                'automatic',
            ]),

            'fuel_type' => fake()->randomElement([
                'petrol',
                'diesel',
                'electric',
                'hybrid',
                'cng',
            ]),
            'seats' => fake()->randomElement([4, 5, 7]),

            'luggage_capacity' => fake()->numberBetween(2, 6),

            'color' => fake()->randomElement([
                'Black',
                'White',
                'Silver',
                'Blue',
                'Red',
            ]),

            'registration_number' => strtoupper(fake()->unique()->bothify('GJ##??####')),

            'hourly_price' => fake()->numberBetween(500, 3000),
            'daily_price' => fake()->numberBetween(2500, 15000),
            'weekly_price' => fake()->numberBetween(15000, 80000),

            'security_deposit' => fake()->numberBetween(5000, 50000),

            'description' => fake()->paragraph(),

            'status' => true,
        ];
    }
}
