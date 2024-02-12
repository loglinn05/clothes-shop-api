<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
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
            'title' => fake()->sentence(3),
            'description' => fake()->text(255),
            'content' => fake()->text(255),
            'price' => fake()->numberBetween(1, 500),
            'old_price' => fake()->boolean() ? fake()->numberBetween(500, 1500) : null,
            'count' => fake()->numberBetween(1, 2000),
            'category_id' => fake()->randomElement(Category::where('id', '>', 0)->pluck('id')->toArray()),
        ];
    }
}
