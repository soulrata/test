<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;

use Illuminate\Support\Facades\Mail;
// use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ], [
            // personalizar mis propios mensajes de error
            'name.required' => 'faltaría completar el nombre amigo!'
        ]);

        //Enviar email
        Mail::to('liaomiguel@gmail.com')->queue(new MessageReceived($mensaje));

        return 'Mensaje Enviado';
    }
}
