<?php

use App\Http\Controllers\AdminAdminController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminContactFormController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/contact-us', [ContactUsFormController::class, 'index']);
Route::post('/contact-us', [ContactUsFormController::class, 'store'])->name('contact.store');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);

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
    Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order.index');
    Route::post('/admin/order/{id}', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
    Route::get('/admin/order/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.delete');
    
    Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('category.index');
    Route::post('/admin/category', [AdminCategoryController::class, 'store'])->name('category.store');
    Route::post('/admin/category/{id}', [AdminCategoryController::class, 'edit'])->name('category.edit');
    Route::get('/admin/category/{id}', [AdminCategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/admin/product', [AdminProductController::class, 'index'])->name('product.index');
    Route::post('/admin/product', [AdminProductController::class, 'store'])->name('product.store');
    Route::post('/admin/product/{id}', [AdminProductController::class, 'edit'])->name('product.edit');
    Route::get('/admin/product/{id}', [AdminProductController::class, 'destroy'])->name('product.delete');

    Route::get('/admin/news', [AdminNewsController::class, 'index'])->name('news.index');
    Route::post('/admin/news', [AdminNewsController::class, 'store'])->name('news.store');
    Route::post('/admin/news/{id}', [AdminNewsController::class, 'edit'])->name('news.edit');
    Route::get('/admin/news/{id}', [AdminNewsController::class, 'destroy'])->name('news.delete');
    
    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('user.index');
    Route::post('/admin/user', [AdminUserController::class, 'store'])->name('user.store');
    Route::get('/admin/user/{id}', [AdminUserController::class, 'destroy'])->name('user.delete');

    Route::get('/admin/admin', [AdminAdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/admin', [AdminAdminController::class, 'store'])->name('admin.store');
    Route::post('/admin/admin/{id}', [AdminAdminController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/admin/{id}', [AdminAdminController::class, 'destroy'])->name('admin.delete');

    Route::get('/admin/contact', [AdminContactFormController::class, 'index'])->name('admin.contact.index');
    Route::get('/admin/contact/{id}', [AdminContactFormController::class, 'destroy'])->name('admin.contact.delete');
});