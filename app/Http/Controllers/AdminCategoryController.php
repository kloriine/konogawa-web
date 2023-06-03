<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index () {
        $user = Auth::user();
        $categories = Category::orderByDesc('created_at')->paginate(10);

        return view('admin-category', ['categories' => $categories]);
    }

    public function store () {
        $this->validate(request(), [
            'category' => 'required',
        ]);

        $category = new Category();
        $category->category = request('category');
        $category->save();

        $notification = [
            'message' => 'Category added successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function edit (Request $request, $id) {
        $this->validate(request(), [
            'category' => 'required',
        ]);

        $data = array(
            'category' => $request->input('category')
        );
        Category::where('id', $id)->update($data);

        $notification = [
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        Category::where('id', $id)->delete($id);

        $notification = [
            'message' => 'Category has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
