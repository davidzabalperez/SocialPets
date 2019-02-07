<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImgurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'avatar' => 'required',
        ],[
            'avatar.required' => 'Selecciona una foto',
        ]);
        $dog = Dog::where('user_id', Auth::user()->id)->first(); 
        $foto = $request->file('avatar');
        
        $image64 = base64_encode(file_get_contents($foto)); //pasar la foto a base64
        //llamar a la api y subir la imagen
        $curl = curl_init();
        $client_id = "b4636bfd086069c";
        $token = "3c5a35d037e906273b75ab6c3dbab062c9440fb5";
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.imgur.com/3/image",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('image' => $image64),
          CURLOPT_HTTPHEADER => array(
            // "Authorization: Client-ID {{1cb45b7462006f}}",
            "Authorization: Bearer ".$token //nuestro token para acceder a ala api
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $json = json_decode($response);
          $dog->avatar = $json->data->link; //pilla link de la api
          
          $dog->save();
          /* dd($dog); */
          return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
