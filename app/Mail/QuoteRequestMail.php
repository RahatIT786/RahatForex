<?php
// app/Mail/QuoteRequestMail
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
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
                    ->view('email.forex_mail'); // Create a corresponding email view
    }
}
