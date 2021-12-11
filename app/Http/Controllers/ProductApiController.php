<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\http\Requests\StoreProductRequest;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $products = Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreProductRequest $request)
    {
        $product = Product::create($request->all());
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $product = Product::find($id);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        
    }
}
