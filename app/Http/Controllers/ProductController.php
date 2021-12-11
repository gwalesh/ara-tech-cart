<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product' , compact('products'));
    }


    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->all());

        return back()->with('success','Product added Succesfully !');
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
    }
}
