<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function delete(Product $product)
    {
        $category = Category::find(3);
        $product->categories()->detach($category);

        return 'Success';
    }
}
