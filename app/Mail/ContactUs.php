<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
    public $body;
    
    public function __construct($body)
    {
        $this->body = $body;    
    }

    public function build()
    {
        return $this->subject('New Mail For Prosoft')->view('mail');
        // return $this->markdown('arkdown')->with('body',$this->body);
    }

 
}
