<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
{
    public function index () {
        $user = Auth::user();
        $news = News::orderByDesc('created_at')->paginate(2);
        return view('admin-news', ['news' => $news]);
    }

    public function store (Request $request) {
        $this->validate(request(), [
            'newsTitle' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'newsDescription' => 'required',
        ]);

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $news = new News();
        $news->img_src = '/images'.'/'.$imageName;
        $news->title = request('newsTitle');
        $news->description = request('newsDescription');
        $news->save();

        $notification = [
            'message' => 'News has been added successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function edit (Request $request, $id) {
        $this->validate(request(), [
            'newsTitle' => 'required',
            'newsDescription' => 'required',
        ]);

        $data = array(
            'title' => $request->input('newsTitle'),
            'description' => $request->input('newsDescription'),
        );
        News::where('id', $id)->update($data);

        $notification = [
            'message' => 'News has been updated successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        News::where('id', $id)->delete($id);

        $notification = [
            'message' => 'News has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
