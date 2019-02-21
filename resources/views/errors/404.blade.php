@extends('layouts.login_master')
@section('tittle','error 404')
    
@section('content')



<audio autoplay="autoplay" style="display:none;">
<source src="/sounds/404.mp3" type="audio/mpeg">
<embed src="/sounds/404.mp3" hidden="true" autostart="true" loop="false" class="playSound" />
</audio>

    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
            <center><h1 class="h1white">Error 404. Pagina no encontrada </h1>
                    <br>
               <img src="/img/error404.jpg" height="400px" alt=""></center>         
            </div>
        </div>
    </div>
@endsection


