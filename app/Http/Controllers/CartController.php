<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
public function index(){
    $tax = config('cart.tax')/100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $newsubtotal = (Cart::subtotal() - $discount );
    $newtax = $newsubtotal * $tax;
    $newtotal = $newsubtotal * (1 + $tax);
    return view('cart')->with([
        'discount' => $discount,
        'newsubtotal' => $newsubtotal,
        'newtax' => $newtax,
        'newtotal' => $newtotal
        
    ]);
  
}

public function update(Request $request, $id){
    Cart::update($id, $request->quantity);

    session()->flash('success_message', 'quantity was updated successfully');
    return response()->json(["success" => true]);
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


public function destroy($id){

    Cart::remove($id);

    return redirect()->back();
}
}
