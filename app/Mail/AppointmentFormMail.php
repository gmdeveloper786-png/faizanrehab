<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Appointment Booking - Faizan Rehabilitation Center')
                    ->view('emails.appointment-form')
                    ->with([
                        'name' => $this->data['name'],
                        'father_name' => $this->data['father_name'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'],
                        'age' => $this->data['age'],
                        'date' => $this->data['date'],
                        'services' => $this->data['services'],
                        'reason' => $this->data['reason'],
                    ]);
    }
}

