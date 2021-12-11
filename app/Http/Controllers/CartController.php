<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::orderBy('created_at','desc')->get();
        return view('cart' , compact('carts'));
    }


    public function store(StoreCartRequest $request)
    {
        $cart = Cart::create($request->all());

        return back()->with('success','Added to Cart Succesfully !');
    }


    public function destroy($id)
    {
        $cart = Cart::find($id);

        $cart->delete();

        return back()->with('success','Product Removed Succsfully !');
    }
}
