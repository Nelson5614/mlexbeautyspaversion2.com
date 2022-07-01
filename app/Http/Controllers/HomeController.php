<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   
    public function home(){

        $products = Product::inRandomOrder()->get();

            return view('home')->with('products', $products);
      
    }
    public function massage_services(){

            return view('massage_services');
      
    }
    public function body_services(){

            return view('body_services');
      
    }
    public function shop(){
        $products = Product::inRandomOrder()->get();

            return view('shop')->with('products', $products);
      
    }

    public function show($slug){

        $product = Product::where('slug', $slug)->firstOrFail();
        $relatedproducts = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        return view('product_details')->with([
                'product'=> $product,
                'relatedproducts'=> $relatedproducts
        ]);

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
 
    public function specialists(){

            return view('specialists');
      
    }
    public function appointment(){

            return view('appointment');
      
    }
}
