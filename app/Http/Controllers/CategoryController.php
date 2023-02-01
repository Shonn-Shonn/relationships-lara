<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Type;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        // $type = Type::find(1);
        // dd($type->categories);

        // $item = Item::find(1);
        // dd($item->types);

        // $category = Category::find(1);
        // dd($category->types);

        $category = Category::find(1);
        dd($category->items);      
        
    }
}
