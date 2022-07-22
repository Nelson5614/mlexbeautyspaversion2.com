<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    
public function checkout(){

    return view('checkout');
  
}

public function store(Request $request){

    $contents = Cart::content()->map(function($item){
        return $item->model->slug.','.$item->qty;
    })->values();


    //Inserting into orders table
    $order = Order::create([
    'user_id' => auth()->user() ? auth()->user()->id: null,
    'billing_email' => $request->email,
    'billing_name' => $request->name,
    'billing_lastname' => $request->lastname,
    'billing_phone' => $request->billing_phone,
    'billing_country' => $request->billing_country,
    'billing_district' => $request->billing_district,
    'billing_discount'=>$this->getNUmbers()->get('discount'),
    'billing_discount_code'=>$this->getNUmbers()->get('code'),
    'billing_subtotal'=>$this->getNUmbers()->get('newsubtotal'),
    'billing_tax'=>$this->getNUmbers()->get('newtax'),
    'billing_total'=>$this->getNUmbers()->get('newtotal'),
    'error'=> null
    ]);

    //Inserting into pivot [order_product_table]

    foreach(Cart::content() as $item){
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $item->model->id,
            'quantity' => $item->qty,
            
        ]);
    }
}

public function getNUmbers(){
    $tax = config('cart.tax')/100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newsubtotal = (Cart::subtotal() - $discount );
    $newtax = $newsubtotal * $tax;
    $newtotal = $newsubtotal * (1 + $tax);

    return collect([
        'tax' =>$tax,
        'code' =>$code,
        'discount' => $discount,
        'newsubtotal' => $newsubtotal,
        'newtax' => $newtax,
        'newtotal' => $newtotal
    ]);
   
  
  
}

public function mpesa(){

    return view('mpesa.index');
}

}
