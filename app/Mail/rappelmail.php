<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class rappelmail extends Mailable
{

    use Queueable, SerializesModels;

    public  $identifient , $nouveau_temp;


    public function __construct($identifient,$nouveau_temp)
    {
        $this->identifient = $identifient;
        $this->nouveau_temp = $nouveau_temp;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Alert de retard')->view('mailing.rappel_mail');
    }
}
