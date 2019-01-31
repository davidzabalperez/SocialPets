@extends('layouts.profile_master')
@section('title', Auth::user()->name)
@section('content')

<div class="container">
  @if(!empty($user->dog))
    <div class="box">
    @include('editar_perfil.formulario_editar_perfil')

    <h3>{{ $user->dog->name }}</h3>
    <div class="box-sub">
      <div class="{{ $user->dog->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="{{ $user->dog->avatar }}" />
    </div>
    </div>
    <p class="datos">Dueña/o: 
      {{ $user->name }}</p>
    <p class="datos">Raza: {{ $user->dog->race }}</p>
    @if($user->dog->age > 1)
    <p class="datos">Edad: {{ $user->dog->age }} años</p>
    @else
    <p class="datos">Edad: {{ $user->dog->age }} año</p>
    @endif
     <a class="btn btn-light btn-sm" rel="publisher" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-cogs iconEditProfile"></i></a>
     
  </div>
  </div>
  @else
   

  <h3 style="color:white;">No tienes ningun perro!!</h3>
  <a href="/step2" class="btn btn-primary btn-block">Añade tu perro</a>
@endif


@endsection


