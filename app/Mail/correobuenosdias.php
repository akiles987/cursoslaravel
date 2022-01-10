<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class correobuenosdias extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Testeo de laravel";
    public $contacto;

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }


    public function build()
    {
        
        return $this->view('menu.datoscontacto');
    }
}
