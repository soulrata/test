<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
// use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ], [
            // personalizar mis propios mensajes de error
            'name.required' => 'faltaría completar el nombre amigo!'
        ]);

        //Enviar email
        Mail::to('liaomiguel@gmail.com')->send();

        return 'Mensaje Enviado';
    }
}
