<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class TikerMail extends Mailable
{


    use Queueable, SerializesModels;

    public $subject;
    public $body;
    // public $user;
    public $reservationData;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $body, $reservationData)
    {
        $this->subject = $subject;
        $this->body = $body;
        // $this->user = $user;
        $this->reservationData = $reservationData;



    }

    public function build()
    {

        //   dd($this->reservationData);
        return $this->subject($this->subject)
            ->view('email')
            ->with([
                'body' => $this->body,
                // 'user' => $this->user,
                'reservationData' => $this->reservationData,

            ]);
    }
}