<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{   
    public function index () {
        return view('menu');

        // $category1 = Product::where('category_id', 1)->get();
        // $category2 = Product::where('category_id', 2)->get();
        // $category3 = Product::where('category_id', 3)->get();
        // $category4 = Product::where('category_id', 4)->get();
        // $category5 = Product::where('category_id', 5)->get();
        // $category6 = Product::where('category_id', 6)->get();
        // $category7 = Product::where('category_id', 7)->get();
        // $category8 = Product::where('category_id', 8)->get();
        // $category9 = Product::where('category_id', 9)->get();
        // $category10 = Product::where('category_id', 10)->get();
        // $category11 = Product::where('category_id', 11)->get();
        
        // return view('menu', [
        //     'category1' => $category1,
        //     'category2' => $category2,
        //     'category3' => $category3,
        //     'category4' => $category4,
        //     'category5' => $category5,
        //     'category6' => $category6,
        //     'category7' => $category7,
        //     'category8' => $category8,
        //     'category9' => $category9,
        //     'category10' => $category10,
        //     'category11' => $category11,
        //     ]
        // );
    }
}
