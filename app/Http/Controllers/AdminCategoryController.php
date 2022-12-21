<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
{
    public function index () {
        $categories = DB::table('categories')->paginate(10);
        return view('admin-category', ['categories' => $categories]);
    }
}
