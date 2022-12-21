<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index () {
        $products = DB::table('products')->paginate(10);
        return view('admin-product', ['products' => $products]);
    }
}
