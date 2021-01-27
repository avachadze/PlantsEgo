<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactResponse extends Mailable
{
    use Queueable, SerializesModels;

    private $message= null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($output)
    {
        $this->message= $output;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->message->input('form-Subject'))
                    ->from('plantsego@gmail.com')
                    ->view('pages.response')->with(
                                    ['msg' => $this->message->input('msg')]
                                            );
    }
}
