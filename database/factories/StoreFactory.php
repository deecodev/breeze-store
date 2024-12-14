<?php

namespace Database\Factories;

use App\Enums\StoreStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(3, 5),
            'name' => $name = $this->faker->company,
            'slug' => str($name)->slug(),
            'description' => fake()->paragraph(2, true),
            'status' => StoreStatus::ACTIVE
        ];
    }
}
