<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::redirect('/admin', '/admin/order')->name('admin');

// Route::get('/admin/order', function () {
//     return view('admin-order');
// });

// Route::get('/admin/category', function () {
//     return view('admin-category');
// });

// Route::get('/admin/product', function () {
//     return view('admin-product');
// });

// Route::get('/admin/user', function () {
//     return view('admin-user');
// });

// Route::get('/admin/admin', function () {
//     return view('admin-admin');
// });

Route::middleware('auth')->group(function () {
    Route::get('/admin/order', function () {
        return view('admin-order');
    });
    
    Route::get('/admin/category', [AdminCategoryController::class, 'index']);

    Route::get('/admin/product', [AdminProductController::class, 'index']);
    
    Route::get('/admin/user', [AdminUserController::class, 'index']);
    
    Route::get('/admin/admin', function () {
        return view('admin-admin');
    });
});