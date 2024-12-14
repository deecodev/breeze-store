<?php

namespace Database\Factories;

use App\Models\Store;
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
            'store_id' => Store::factory(),
            'category_id' => rand(1, 4),
            'name' => $name = str(fake()->sentence())->title(),
            'slug' => str($name)->slug(),
            'price' => rand(11111, 99999),
            'stock' => rand(0, 3),
        ];
    }
}
