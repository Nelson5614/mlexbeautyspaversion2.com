@component('mail::message')

<img src="{{ asset('assets/img/logo.png') }}" style="width: 100px; margin-left: 40%;"> <br> <br>
<h1> Your appointment is successfully placed. </h1>

Dear customer,

we have successfully recieved your appointment with the below details. Please note that our appointments are supposed to be approved in order to avoid clashes with the schedule, the below details may be altered, we therefore highly suggest that we check your dashboard on "my Appointments" tab to check the details of your appointment after approval

@component('mail::panel')
    Appointed Service: {{ $appointmentService }} <br>
    Appointment Date: {{ $appointmentDate }} <br>
    Appointment Time: {{ $appointmentTime }}
    
@endcomponent

@component('mail::button', ['url' => '/'])
 Visit site
@endcomponent

Kind regards,<br>
{{ config('app.name') }}
@endcomponent
