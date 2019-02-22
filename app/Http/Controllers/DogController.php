<?php

namespace App\Http\Controllers;

use App\Dog;
use Auth;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequests();
        return view('/dog/dog_feed')->with([
            'dogs'=>$dogs,
            'friends'=>$friends,
            'requests'=>$requests
        ]);
        /* dump($dogs);
        php artisan dump -serve */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $dog = Dog::find($id);
          $friends = Auth::user()->friends();
          $requests = Auth::user()->friendRequests();
          return view('profile_others')->with([
            'dog'=>$dog,
            'friends'=>$friends,
            'requests'=>$requests
        ]);
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
        request()->validate([
            'name'=>'string|max:15|min:3',
            'gender'=>'required',
        ],[
            'name.string' => 'introduce un texto',
            'name.min' => 'minimo 3 caracteres',
            'name.max' => 'maximo 15 caracteres',

        ]);
        $dog=Dog::findOrFail($id);
        $dog->name = $request->input('name');
        $dog->age = $request->input('age');
        $dog->gender = $request->input('gender');
        $dog->save();
        return redirect('/profile')->with('success', 'Perro editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dog = Dog::find($id);
        $dog->delete();

        return back()->with('success', 'Perro eliminado correctamente');
    }

}
