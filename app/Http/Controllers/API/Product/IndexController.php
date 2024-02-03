<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Product\FilterRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use App\Custom\Filter\ProductFilter;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
        $products = (new Product)->filter(Product::query(), $filter)
            ->paginate(8, ['*'], 'page', $data['page']);
        return ProductResource::collection($products);
    }
}
