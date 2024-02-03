<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['title'] = ucfirst(strtolower($data['title']));
        Category::firstOrCreate($data);

        return redirect()->route('category.index');
    }
}
