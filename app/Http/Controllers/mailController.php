<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class mailController extends Controller
{
    
    public function contacto(Request $request)
    {
                  
                $nombre = $request->input('name');
                $mensaje = $request->input('message');
                $email = $request->input('email');
                

                $data = array('email' => $email, 'nombre' => $nombre, 'mensaje' => $mensaje);
                Mail::send('sending', $data, function ($message) use (
                    $mensaje,$email
                ) {
                    $message->to('benicio.nb@gmail.com')
                        ->subject('presupuesto')
                        ->from($email);
                });
                return back()->with('flash','Tu consulta fue enviada con exito!!');
    }


}
