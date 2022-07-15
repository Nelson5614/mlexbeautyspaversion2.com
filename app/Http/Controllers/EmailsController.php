<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email(){

        Mail::to('infor@mathebeng.com')->send( new AttachmentMail());
    }

    public function appointment(Request $request){

        $appointment = Appointment::findOrFail($request->appointment_id);

        Mail::to($request->user())
        ->queue( new AppointmentMail($appointment));
        return view('emails.appointments');
    }
}
