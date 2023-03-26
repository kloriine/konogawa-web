<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller
{
    public function index () {
        $news = News::orderBy('id', 'desc')->paginate(3);
        return view('index', ['news' => $news]);
    }
}
