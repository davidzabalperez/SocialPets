@extends('layouts.profile_master')
@section('title', Auth::user()->name)
@section('content')

<div class="container">
  @if(!empty($user->dog))
    <div class="box_profile">
    @include('editar_perfil.formulario_editar_perfil')

    <h3>{{ $user->dog->name }}</h3>
    <div class="box-sub">
      <div class="{{ $user->dog->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($user->dog->avatar != 'user.png')
      <img src="{{ $user->dog->avatar }}" />
      @else
      <img src="/img/user.png"/>   
      @endif
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
     <a class="btn-config" rel="publisher" data-toggle="modal" data-target="#editProfileModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-cogs iconEditProfile"></i></a>
     
  </div>
  </div>
  @else
   

  <h3 style="color:white;">No tienes ningun perro!!</h3>
  <a href="/step2" class="btn btn-primary btn-block">Añade tu perro</a>
@endif


@endsection


