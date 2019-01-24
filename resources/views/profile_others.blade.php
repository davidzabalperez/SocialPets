@extends('layouts.profile_master')
@section('title', 'Perfil de '.$usuario->name)
@section('content')
<div class="container">
  <div class="box">
    <h3>{{ $usuario->name }}</h3>
    <div class="box-sub">
      <div class="{{ $usuario->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="/storage/avatars/{{ $usuario->avatar }}" />
    </div>
    </div>
    <p>Raza: {{ $usuario->race }}</p>
    @if($usuario->age > 1)
    <p>Edad: {{ $usuario->age }} años</p>
    @else
    <p>Edad: {{ $usuario->age }} año</p>
    @endif
  </div>
  @endsection