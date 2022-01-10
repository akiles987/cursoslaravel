<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\correobuenosdias;

class ContactoController extends Controller
{
    public function index(){

        return view('menu.contacto');

    }

    public function store(Request $request){

        $request->validate([
            'nombre'=> 'required',
            'apellido'=> 'required',
            'correo'=> 'required|email',
        ]);


        $correo = new correobuenosdias($request->all());
        Mail::to('laravel420test@gmail.com')->send($correo);

        return view('menu.index')->with('info','Mensaje enviado');

    }

}
