<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CouponsController extends Controller
{
    public function store(Request $request){
        
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        
        if(!$coupon){
            return redirect()->route('cart.index')->withErrors('Invalid coupon, please try again');
        }

        session()->put('coupon', [
            'name'=>$coupon->code,
            'discount'=>$coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('cart.index')->with('success_massage', 'coupon added successfully');
    }

    public function destroy(Request $request){

        $request->session()->forget('coupon');

        return redirect()->route('cart.index')->with('success_message', 'Coupon deleted successfuly');
    }
}
