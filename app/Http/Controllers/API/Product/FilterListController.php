<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Color;

class FilterListController extends Controller
{
    public function __invoke(Product $product)
    {
    	$categories = Category::all();
    	$colors = Color::all();
    	$tags = Tag::all();

    	$minPrice = Product::orderBy('price', 'ASC')->first()->price;
    	$maxPrice = Product::orderBy('price', 'DESC')->first()->price;

    	$result = [
    		"categories" => $categories,
    		"colors" => $colors,
    		"tags" => $tags,
    		"price" => [
    			'min' => $minPrice,
    			'max' => $maxPrice,
    		],
    	];

    	return response()->json($result);
    }
}
