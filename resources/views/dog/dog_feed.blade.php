@extends('layouts.usuariosFeed')
@section('title', 'Inicio')
@section('content')

<div class="container">
  @foreach($dogs->sortByDesc('id') as $dog) 
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dog->user->id != Auth::user()->id)
  <div class="box">
    <h3>{{$dog->name}}</h3>
    <div class="box-sub">
      <div class="{{ $dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="/public/uploads/{{ $dog->avatar }}"/>
    </div>
    </div>
    <p>Raza: {{$dog->race}}</p>
    @if($dog->age > 1)
    <p>Edad: {{$dog->age}} años</p>
    @else
    <p>Edad: {{$dog->age}} año</p>
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

