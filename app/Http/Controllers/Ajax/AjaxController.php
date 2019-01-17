<?php
namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function cargarMensajes(Request $request){
    	$user = Auth::user();
    	$numRegistros = $request->get('numRegistros');
      	$mensajes = Mensaje::select('id_sender','text')->take($numRegistros)->where('id_receiver', $user->id)->get();
        return view('ajax.mensajes', ['mensajes'=>$mensajes]);
    }
      public function darMensajes(){
      $mensajes = Mensaje::selectRaw(
        'mensajes.id_sender,
        mensajes.text'
        )->get();
        return view('mensajes', compact('msjs'));
    }
}
/*public function index() {
    $msg = "Leido";
    return response()->json(array('msg'=> $msg), 200);
 }*/