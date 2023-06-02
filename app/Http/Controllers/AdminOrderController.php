<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    public function index () {
        $user = Auth::user();
        $receipts = Receipt::paginate(10);
        return view('admin-order', ['receipts' => $receipts]);
    }

    public function edit (Request $request, $id) {
        $this->validate(request(), [
            'orderName' => 'required',
            'orderedItems' => 'required',
            'orderTotalPrice' => 'required',
            'orderStatus' => 'required',
        ]);

        $data = array(
            'user_name' => $request->input('orderName'),
            'ordered_items' => $request->input('orderedItems'),
            'total_price' => $request->input('orderTotalPrice'),
            'status' => $request->input('orderStatus'),
        );
        Receipt::where('id', $id)->update($data);

        $notification = [
            'message' => 'Order data updated successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function destroy ($id) {
        Receipt::where('id', $id)->delete($id);

        $notification = [
            'message' => 'Order data has been deleted successfully!',
            'alert-type' => 'info'
        ];

        return back()->with($notification);
    }
}
