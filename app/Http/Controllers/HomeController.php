<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   
    public function home(){

            return view('home');
      
    }
    public function massage_services(){

            return view('massage_services');
      
    }
    public function body_services(){

            return view('body_services');
      
    }
    public function shop(){

            return view('shop');
      
    }
    public function about(){

            return view('about');
      
    }
    public function portfolio(){

            return view('portfolio');
      
    }
    public function blog(){

            return view('blog');
      
    }
    public function blog_details(){

            return view('blog_details');
      
    }
    public function contact(){

            return view('contact');
      
    }
    public function product_details(){

            return view('product_details');
      
    }
    public function cart(){

            return view('cart');
      
    }
    public function checkout(){

            return view('checkout');
      
    }
    public function specialists(){

            return view('specialists');
      
    }
}
