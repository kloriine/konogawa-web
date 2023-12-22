<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Receipt;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     $product = Order::get();
        //     return $this->responseOK($product, 200);
        // } catch (\Throwable $th) {
        //     // \Log::error($th->getMessage());
        //     return $this->responseError("Internal Server Error", 500);
        // }
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

            function getLastOrderTimeForUser($userId) {
                $lastOrder = Order::where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->first();

                if ($lastOrder) {
                    return $lastOrder->created_at;
                }

                return null;
            }

            $lastOrderTime = getLastOrderTimeForUser($userId);
        
            if ($lastOrderTime !== null) {
                $currentTime = Carbon::now();
                $nextOrderTime = $lastOrderTime->addSeconds(60);
        
                if ($currentTime < $nextOrderTime) {
                    $remainingTime = $currentTime->diffInSeconds($nextOrderTime);
        
                    return response()->json([
                        'success' => false,
                        'message' => 'Please wait ' . $remainingTime . ' seconds before placing another order.',
                    ], 400);
                }
            }

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
                if ($lastOrderTime !== null) {
                    $orders = Order::join('products', 'orders.product_id', '=', 'products.id')
                    ->select('products.name', DB::raw('COUNT(orders.product_id) as quantity'))
                    ->where('orders.user_id', $userId)
                    ->where('orders.created_at', '>', $lastOrderTime)
                    ->groupBy('products.name')
                    ->get();
                } else {
                    $orders = Order::join('products', 'orders.product_id', '=', 'products.id')
                    ->select('products.name', DB::raw('COUNT(orders.product_id) as quantity'))
                    ->where('orders.user_id', $userId)
                    ->groupBy('products.name')
                    ->get();
                }
            
                $orderedItems = '';

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

            return response()->json([
                'success' => true,
                'message' => 'Order placed successfully.',
            ], 200);
        } catch (\Throwable $th) {
            // \Log::error($th->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Internal Server Error',
            ], 500);
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
