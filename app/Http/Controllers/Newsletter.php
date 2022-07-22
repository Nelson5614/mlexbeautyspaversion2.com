<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class Newsletters extends Controller
{
    public function newsletter(Request $request){

        Newsletter::create([
            'email'=>$request->input('email'),
        ]);
    }
}
