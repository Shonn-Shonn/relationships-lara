<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryAttach;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(CategoryAttach $request)
    {
        $product = new Product();
        $product = Product::where('id', $request->product_id)->first();

        $category = Category::find($request->category_id);
        $product->categories()->sync($category);

        return 'Success';
    }

    public function show()
    {
        $category = Category::find(3);
        //dd($category->products); // will return all products for the category id 1

        $product = Product::find(1);
        dd($category->products); 
    }
}
