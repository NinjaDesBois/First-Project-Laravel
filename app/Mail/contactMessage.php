<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $content;

    public function __construct($name , $email, $content)
    {
        $this->name = $name;
        $this->email = $email;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('emails/contactmessage')->with([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'content' => $this->content,

        // ]);
        return $this->markdown('emails/contactmessage',[
               'name' => $this->name,
                'email' => $this->email,
                'content' => $this->content
            ]);

    }
}
