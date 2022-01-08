<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class correobuenosdias extends Mailable
{
    use Queueable, SerializesModels;

    public $correo;

    public function __construct(Correo $correo)
    {
        $this->correo = $correo;
    }


    public function build()
    {
        return $this->view('pruebas.index');
    }
}
