<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{

    public function cargarMensajes(){
      $mensajes = Mensaje::selectRaw(
        'mensajes.id_sender,
        mensajes.text'
        )->get();

        return view('ajax.mensajes', compact('mensajes'));
    }
}
/*public function index() {
    $msg = "Leido";
    return response()->json(array('msg'=> $msg), 200);
 }*/
