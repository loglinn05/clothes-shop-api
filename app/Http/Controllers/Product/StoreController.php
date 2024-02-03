<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['content'] = $data['content'];
        $productImages = $data['preview_images'];
        $tags = $data['tags'];
        $colors = $data['colors'];
        unset($data['tags'], $data['colors'], $data['preview_images']);
        $product = Product::firstOrCreate([
            'title' => $data['title'],
            'category_id' => $data['category_id']
        ], $data);
        foreach ($productImages as $productImage) {
            $filePath = Storage::disk('public')->put('/images', $productImage);
            ProductImage::create([
                'file_path' => $filePath,
                'product_id' => $product->id
            ]);
        }
        $product->tags()->attach($tags);
        $product->colors()->attach($colors);

        return redirect()->route('product.index');
    }
}
