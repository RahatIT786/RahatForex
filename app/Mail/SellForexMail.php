<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SellForexMail extends Mailable
{
    use SerializesModels;

    public $data;  // Declare the public data variable

    // Constructor to accept and assign the $data variable
    public function __construct($data)
    {
        $this->data = $data;
    }


    // Build the email
    public function build()
    {
        return $this->subject('New Quote Request')
                    ->view('email.Sell-forex-mail'); // Create a corresponding email view
    }
}
