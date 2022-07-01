<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function appointment(Request $request){

        $data = new appointment();

        $data->service = $request->aa_service;
        $data->time = $request->aa_time;
        $data->date = $request->aa_date;
        $data->name = $request->aa_name;
        $data->email = $request->aa_email;
        $data->phone = $request->aa_number;
        $data->message = $request->aa_message;
        $data->status = 'In progress';

        if(Auth::id()){

            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment request submitted successfully, we will contact you soon');

    
    }

    public function myappointments(){

        if(Auth::id()){

            $userid = Auth::user()->id;

            $appoint = appointment::where('user_id', $userid)->get();

            return view('my_appointments', compact('appoint'));
        }

        else{
            return redirect()->back();
        }
    }

    public function cancel($id){

        $data = appointment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
