<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function verEstadistica($year){
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
                    return view('estadisticas', [
                        'usersPerMonth'=> $usersPerMonth
                    ]);   
    }

}
