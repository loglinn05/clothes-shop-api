<?php

namespace App\Http\Controllers\API\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $product = Product::find($id);
        return (new ProductResource($product));
    }
}
