<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index () {
        $news = News::orderBy('id', 'desc')->paginate(9);
        return view('news', ['news' => $news]);
    }
}
