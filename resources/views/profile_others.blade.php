@extends('layouts.profile_master')
@section('title', 'Perfil de '.$dog->name)
@section('content')
<div class="container">
  <div class="box">
    <h3>{{ $dog->name }}</h3>
    <div class="box-sub">
      <div class="{{ $dog->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="/public/uploads/{{ $dog->avatar }}" />
    </div>
    </div>
    <p>Raza: {{ $dog->race }}</p>
    <p>Edad: {{$dog->age}} {{ $dog->age > 1 ? 'años' : 'año'}}</p>
    <p>Dueña/o: {{ $dog->user->name }}</p>
  </div>
  @endsection