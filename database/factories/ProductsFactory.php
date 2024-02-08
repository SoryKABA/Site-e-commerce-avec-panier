<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentences(3, true),
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'slug' => $this->faker->slug(),
            'size_id' => $this->faker->numberBetween(1,5),
            'category_id' => $this->faker->numberBetween(1,7)
        ];
    }
}
