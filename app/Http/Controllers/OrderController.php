<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
        
            // Process the order data and user ID as needed
        
            // Example: Loop through the order items and save them with the user ID
            foreach ($orderData as $orderItem) {
                $itemId = $orderItem['id'];
                
                // Save the item to the database with the user ID
                $order = new Order();
                $order->user_id = $userId;
                $order->product_id = $itemId;
                $order->save();
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
