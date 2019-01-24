@extends('layouts.profile_master')
@section('title', 'Perfil')
@section('content')
<div class="container">

  <div class="box">
    <h3>{{ $user->dog->name }}</h3>
    
     <a class="btn btn-light btn-sm" rel="publisher" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-cogs iconEditProfile"></i></a>
  </div>
  @endsection