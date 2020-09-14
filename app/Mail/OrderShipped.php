<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $name;
    private $email;
    private $phone;
    private $message;

    public function __construct($name, $email, $phone, $message)
    {
        If($name)
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('yourwebsite@zettelgeomatics.com')
        ->text('view.name_plain')
        ->view('view.name');
    }
}
