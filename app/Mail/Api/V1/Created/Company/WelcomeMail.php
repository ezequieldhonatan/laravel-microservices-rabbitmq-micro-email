<?php

namespace App\Mail\Api\V1\Created\Company;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown( 'mail.api.v1.created.company.welcome' )
                        ->subject( 'Bem Vindo(a) - ' . config( 'app.name' ) );;
    }

} // WelcomeMail
