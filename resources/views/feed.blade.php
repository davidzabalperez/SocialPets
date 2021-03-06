@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')

<div class="container">
  @foreach($usuarios->sortByDesc('id') as $usuario) <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente
   primero -->
   @if ( $usuario->id != Auth::user()->id)
  <div class="box">
    <h3><a href="{{route('profile_others', $usuario->id)}}"> {{$usuario->name}}</a></h3> 
    <div class="box-sub">
      <div class="{{ $usuario->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
        @if ($user->dog->avatar != 'user.png')
        <img src="{{ $user->dog->avatar }}" />
        @else
        <img src="/img/user.png"/>   
        @endif
    </div>
    </div>
    <p>Raza: {{$usuario->race}}</p>
    @if($usuario->age > 1)
    <p>Edad: {{$usuario->age}} años</p>
    @else
    <p>Edad: {{$usuario->age}} año</p>
    @endif
    <a class="btn btn-primary btn-sm" id="like" rel="publisher"
       href="">
        <i class="fa fa-thumbs-up"></i>
    </a>
    <a class="btn btn-warning btn-sm" rel="publisher" id="dislike" href="">
        <i class="fa fa-thumbs-down"></i>
    </a>

        
  </div>
  @endif
@endforeach
</div>

@endsection
