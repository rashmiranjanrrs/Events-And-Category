<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $author;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author)
    {
        $this->author = $author;
    }

    /**
     * Build the message
     *
     * @return $this
     */
    public function build()
    {
        $author= $this->author;
        return $this->from('rashmiranjanrrs10@gmail.com')->subject('Welcome To Paperwiff')->view('email_template', compact('author'));
    }
}
