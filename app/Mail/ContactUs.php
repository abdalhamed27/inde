<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;
public $name;
public $phone;
public $Email;
public $Message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$phone,$Email,$Message)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->Email=$Email;
        $this->Message=$Message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.message')->from('mb442640@gmail.com');
    }
}
