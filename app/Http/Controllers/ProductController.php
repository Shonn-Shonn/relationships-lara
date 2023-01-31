<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();

        $category = Category::find([1, 2]);
        $product->categories()->attach($category);

        return 'Success';
    }

    public function show()
    {
        $category = Category::find(1);
        //dd($category->products); // will return all products for the category id 1

        $product = Product::find(1);
        dd($category->products->toArray(),$product->categories->toArray()); 
    }
}
