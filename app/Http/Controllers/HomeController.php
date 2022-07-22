<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Bodyservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   
    public function home(){

        $products = Product::inRandomOrder()->get();

            return view('home')->with('products', $products);
      
    }

    public function specialists(){

        $specialists = Specialist::inRandomOrder()->get();
        return view('specialists')->with('specialists', $specialists);
    }
    public function massage_services(){

        $services = Service::inRandomOrder()->get();;
            return view('massage_services')->with('services', $services);
      
    }
    public function body_services(){
        $bodyservices = Bodyservice::inRandomOrder()->get();
            return view('body_services')->with('bodyservices', $bodyservices);
      
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
    public function showservice($slug){

        $service = Service::where('slug', $slug)->firstOrFail();
        return view('services_details')->with('service' ,$service);

    }
    public function showbodyservice($slug){

        $bodyservices = Bodyservice::where('slug', $slug)->firstOrFail();
        return view('bodyservices_details')->with('bodyservices' ,$bodyservices);

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
    public function appointment(){

            return view('appointment');
      
    }
}
