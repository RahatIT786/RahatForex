<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForexQuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $mobile;
    public $email;

    // public function __construct($name, $mobile, $email)
    // {
    //     $this->name = $name;
    //     $this->mobile = $mobile;
    //     $this->email = $email;
    // }

    public function __construct()
    {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->email = $email;
    }

    public function build()
    {
        // Send email with dynamic data and subject
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('New Contact Form Submission')
                    ->html($this->generateHtmlBody());  // Custom HTML content
    }

    // Custom function to generate HTML email body
    private function generateHtmlBody()
    {
        return "
            <h1>New Message Received</h1>
            <p><strong>Name:</strong> {$this->name}</p>
            <p><strong>Email:</strong> {$this->email}</p>
            <p><strong>Mobile:</strong> {$this->mobile}</p>
        ";
    }
}
