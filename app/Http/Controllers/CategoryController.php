<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function delete(Product $product,Request $request)
    {
        dd($request->category_id);
        $product->categories()->detach($request->category_id);

        return 'Success';
    }
}
