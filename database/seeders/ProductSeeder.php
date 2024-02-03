<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory()->count(3)->create();

        foreach ($products as $product) {
            $product->tags()->saveMany(Tag::factory()->count(3)->create());
            $product->colors()->saveMany(Color::factory()->count(3)->create());
            $productImageSeeder = new ProductImageSeeder;
            $productImageSeeder->run($product->id);
        }
    }
}
