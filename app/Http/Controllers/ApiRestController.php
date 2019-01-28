<?php

namespace App\Http\Controllers;

use App\Dog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();
        return $dogs;
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
    public function show($year)
    {
        $usuarios = User::all();
        $allUsersPerMonth = DB::table('users')
                    ->whereYear('created_at',$year)
                    ->orderBy('created_at', $year)
                    ->get();
                    $usersPerMonth = array();
                    for($i=1;$i<13;$i++){
                        $numUsuarios = $allUsersPerMonth->where($year+-+$i);
                        $userPerMonth = DB::table('users')
                        ->whereYear('created_at', $year)
                        ->whereMonth('created_at',$i)
                        ->count();
                        array_push($usersPerMonth,['month'=>$i,'users'=> $userPerMonth]);
                    }
                    return $usersPerMonth;   
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
