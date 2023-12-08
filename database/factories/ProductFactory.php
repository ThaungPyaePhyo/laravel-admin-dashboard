<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(1000,10000),
            'stock_quantity' => $this->faker->numberBetween(1,100),
            'category_id' => function() {
                return ProductCategory::factory()->create()->id;
            }
        ];
    }
}
