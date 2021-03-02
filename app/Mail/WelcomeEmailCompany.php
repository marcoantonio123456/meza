<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmailCompany extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($details = [])
    {
     $this->details=$details;   
    }
    
    public function build()
    {
        $email = $this->details['email'];
        $details = $this->details;
        if($this->details['type'] === "admin")
        {
            return $this->subject($details['subject'])
            ->markdown('emails.welcomecompany', compact('details'));
        }elseif($this->details['type'] === "user"){
            return $this->subject($details['subject'])
            ->markdown('emails.welcomeuser', compact('details'));
        }elseif($this->details['type'] === "extra"){

        }
    }
}
