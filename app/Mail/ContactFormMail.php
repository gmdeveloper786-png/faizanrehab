<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
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
    return $this->subject('New Contact Form Submission - Faizan Rehabilitation Center')
      ->view('emails.contact-form')
      ->with([
        'name' => $this->data['name'],
        'email' => $this->data['email'],
        'phone' => $this->data['phone'],
        'userMessage' => $this->data['message'],
      ]);
  }
}
