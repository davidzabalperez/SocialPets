@extends('layouts.profile_master')
@section('title', 'Perfil de '.$dog->name)
@section('content')
<div class="container">
  <div class="text-white">
    @if(Session::has('info'))
<p></p>
    <center><div class="alert alert-info" style="width: 350px;">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('info') !!}
    </div></center>
@endif


</div>
  <div class="box">
    <h3>{{ $dog->name }}</h3>
    <div class="box-sub">
      <div class="{{ $dog->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
            @if ($dog->avatar != 'user.png')
      <img src="{{ $dog->avatar }}" />
      @else
      <img src="/img/user.png"/>   
      @endif
    </div>
    </div>
    <p>Raza: {{ $dog->race }}</p>
    <p>Edad: {{$dog->age}} {{ $dog->age > 1 ? 'años' : 'año'}}</p>
    <p>Dueña/o: {{ $dog->user->name }}</p>

    @if(Auth::user()->hasFriendRequestPending($dog->user))
            <p class="text-white">Esperando que {{$dog->name}} acepte el Match!</p>

      @elseif(Auth::user()->isFriendsWith($dog->user))

             <p class="text-white"> Tu y {{$dog->name}} son amigos!.</p>
      @else
          <a href="{{ route('friend.addFriend', ['id' => $dog->user->id]) }}" class="btn btn-primary btn-sm" style="height: 35px;">Match!</a>
          @endif
  
  </div>


</div>


  @endsection