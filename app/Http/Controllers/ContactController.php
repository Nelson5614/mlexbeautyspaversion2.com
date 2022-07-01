<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){

        Contact::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('number'),
            'message'=>$request->input('message'),
        ]); 

        return view('home');
    }
}
