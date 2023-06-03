<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
    public function index () {
        $user = Auth::user();
        $products = Product::orderByDesc('created_at')->paginate(10);
        $categories = Category::all();
        return view('admin-product', ['products' => $products, 'categories' => $categories]);
    }
    public function store () {
        $this->validate(request(), [
            'productName' => 'required',
            'productCategory' => 'required',
            'productPrice' => 'required',
        ]);

        $product = new Product();
        $product->name = request('productName');
        $product->description = request('productDescription');
        $product->category_id = request('productCategory');
        $product->price = request('productPrice');
        $product->save();

        $notification = [
            'message' => 'Product added successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function edit (Request $request, $id) {
        $this->validate(request(), [
            'productName' => 'required',
            'productCategory' => 'required',
            'productPrice' => 'required',
        ]);

        $data = array(
            'name' => $request->input('productName'),
            'description' => $request->input('productDescription'),
            'category_id' => $request->input('productCategory'),
            'price' => $request->input('productPrice'),
        );
        Product::where('id', $id)->update($data);

        $notification = [
            'message' => 'Product updated successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        Product::where('id', $id)->delete($id);

        $notification = [
            'message' => 'Product has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
