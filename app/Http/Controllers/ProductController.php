<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $product = Product::with('category_id')->get();
            return $this->responseOK($product, 200);
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
            return $this->responseError("Internal Server Error", 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // try {
        //     $input = $request->all();
        //     Product::insert([
        //         'name'=>$input['name'],
        //         'description'=>$input['description'],
        //         'category_id'=>$input['category_id'],
        //         'harga'=>$input['harga']
        //     ]);
        //     return $this->responseOK(null, 200);
        // } catch (\Throwable $th) {
        //     \Log::error($th->getMessage());
        //     return $this->responseError('Internal Server Error', 500);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $product = Product::with('category_id')->where('id',$id)->first();
            if (empty($product)){
                return $this->responseError("Data dengan ID ".$id." tidak ditemukan", 404);
            }
            return $this->responseOK($product, 200);
        } catch (\Throwable $th) {
            \Log::error($th->getMessage());
            return $this->responseError('Internal Server Error', 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // try {
        //     $input = $request->all();
        //     $product = Product::where('id',$id)->first();
        //     if (empty($product)){
        //         return $this->responseError("Data dengan ID ".$id." tidak ditemukan", 404);
        //     }
        //     $product->update([
        //         'name'=>$input['name'],
        //         'description'=>$input['description'],
        //         'category_id'=>$input['category_id'],
        //         'harga'=>$input['harga']
        //     ]);
        //     return $this->responseOK(null, 200);
        // } catch (\Throwable $th) {
        //     \Log::error($th->getMessage());
        //     return $this->responseError('Internal Server Error', 500);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // try {
        //     $product = Product::where('id',$id)->first();
        //     if (empty($product)){
        //         return $this->responseError("Data dengan ID ".$id." tidak ditemukan", 404);
        //     }
        //     $product->delete();
        //     return $this->responseOK(null, 200);
        // } catch (\Throwable $th) {
        //     \Log::error($th->getMessage());
        //     return $this->responseError('Internal Server Error', 500);
        // }
    }
}
