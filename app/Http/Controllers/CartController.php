<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
public function index(){

    return view('cart');
  
}

public function store(Request $request){

    $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
        return $cartItem->id === $request->id;
    });

    if($duplicates->isNotEmpty()){
        return redirect()->route('cart.index')->with('success', 'Item is already in the cart');
    }

    Cart::add($request->id, $request->name, 1 , $request->price)
        ->associate('App\Models\Product');

    return redirect()->route('cart.index')->with('success', 'Item was added to your cart!');
}


public function checkout(){

    return view('checkout');
  
}

public function destroy($id){

    Cart::remove($id);

    return redirect()->back();
}
}
