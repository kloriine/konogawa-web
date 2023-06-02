<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $product = Order::get();
            return $this->responseOK($product, 200);
        } catch (\Throwable $th) {
            // \Log::error($th->getMessage());
            return $this->responseError("Internal Server Error", 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $requestData = $request->json()->all();

            $orderData = $requestData['orderData'];
            $userId = $requestData['userId'];

            foreach ($orderData as $orderItem) {
                $itemId = $orderItem['id'];

                $order = new Order();
                $order->user_id = $userId;
                $order->product_id = $itemId;
                $order->save();
            }

            $latestOrder = Order::join('users', 'orders.user_id', '=', 'users.id')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->where('orders.user_id', $userId)
                ->select('users.name as user_name', 'orders.created_at', DB::raw('GROUP_CONCAT(products.name SEPARATOR ", ") as ordered_items'), DB::raw('SUM(products.price) as total_price'))
                ->groupBy('users.name', 'orders.created_at')
                ->orderBy('orders.created_at', 'desc')
                ->first();

            if ($latestOrder) {
                $orderedItems = '';
                $orders = Order::join('products', 'orders.product_id', '=', 'products.id')
                    ->select('products.name', DB::raw('COUNT(orders.product_id) as quantity'))
                    ->join(DB::raw('(SELECT product_id, MAX(created_at) as latest_created_at FROM orders WHERE user_id = ' . $userId . ' GROUP BY product_id) latest_orders'), function ($join) {
                        $join->on('orders.product_id', '=', 'latest_orders.product_id')
                            ->on('orders.created_at', '=', 'latest_orders.latest_created_at');
                    })
                    ->where('orders.user_id', $userId)
                    ->groupBy('products.name')
                    ->get();

                foreach ($orders as $order) {
                    $orderedItems .= $order->name . ' (x' . $order->quantity . '), ';
                }

                $orderedItems = rtrim($orderedItems, ', ');

                $finalPrice = $latestOrder->total_price + ($latestOrder->total_price * 0.10);

                $receipt = new Receipt();
                $receipt->user_name = $latestOrder->user_name;
                $receipt->ordered_items = $orderedItems;
                $receipt->total_price = $finalPrice;
                $receipt->status = 'unconfirmed';
                $receipt->save();
            }

            return $this->responseOK(null, 200);
        } catch (\Throwable $th) {
            // \Log::error($th->getMessage());
            return $this->responseError('Internal Server Error', 500);
        }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
