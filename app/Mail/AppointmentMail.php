<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $appointment;
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
        $this->afterCommit();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.appointments')
                    ->with([
                        'appointmentService' => $this->appointment->service,
                        'appointmentDate' => $this->appointment->date,
                        'appointmentTime' => $this->appointment->time

                    ]);
    }
}
