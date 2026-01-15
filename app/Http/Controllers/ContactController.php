<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        $datos = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::raw(
            "Nuevo mensaje de contacto:\n\nNombre: {$datos['name']}\nCorreo: {$datos['email']}\nAsunto: {$datos['subject']}\nMensaje: {$datos['message']}",
            function ($mail) use ($datos) {
                $mail->to(env('MAIL_SUPPORT'))              
                    ->subject('Nuevo mensaje: ' . $datos['subject'])
                    ->replyTo($datos['email'], $datos['name']);
            }
        );

        return back()->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }

    public function index()
    {
        return view('contact'); 
    }
}
