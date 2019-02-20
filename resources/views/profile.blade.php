@extends('layouts.profile_master')
@section('title', Auth::user()->name)
@section('content')

<div class="container">
  @if(!empty($user->dog))
    <div class="box_profile">
    @include('editar_perfil.formulario_editar_perfil')
    @include('editar_perfil.formulario_editar_perfil_perro')

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
      <a class="btn-config" rel="publisher" data-toggle="modal" data-target="#editProfileModal" data-backdrop="static" data-keyboard="false"><i class="fas fa-edit iconEditProfile"></i></a>
    <p class="datos">Raza: {{ $user->dog->race }}</p>
    @if($user->dog->age > 1)
    <p class="datos">Edad: {{ $user->dog->age }} años</p>
    @else
    <p class="datos">Edad: {{ $user->dog->age }} año</p>
    @endif
     <a class="btn-config" rel="publisher" data-toggle="modal" data-target="#editProfileDogModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-paw iconEditProfile"></i></a>
     
  </div>
  </div>
  @else
   

  <h3 style="color:white;">No tienes ningun perro!!</h3>
  <a href="/step2" class="btn btn-primary btn-block">Añade tu perro</a>
@endif

<script>
@foreach($requests as $friend)
  $(window).click(function() {
      $.ajax({url: "/notifications", success: function(result){
        var count = result.length;
        $('#notifications').html('');
        $('#count').html(count);
        for (var i = 0; i < result.length; i++) {
          switch (result[i].marker) {
            case 0:
            $('#notifications').append('<li><a href="#"><div class="icon-circle bg-red"><i class="material-icons">delete_forever</i></div><div class="menu-info"><h4>'+result[i].title+'</h4><p>'+result[i].user_id+'</p></div></a></li>');
            break;
            case 1:
            $('#notifications').append('<li>'+result[i].title+'<br> <center><a href="/dog/'+result[i].friend_id+'">'+result[i].friend_name+'</a></center></li><li><a class="btn btn-success btn-sm" href="/friend/accept/'+result[i].friend_id+'">Aceptar</a><a class="btn btn-danger btn-sm" href="/friend/rejectMatch/'+result[i].friend_id+'">Rechazar</a></li>');
            break;
            case 2:
            $('#notifications').append('<li><a href="javascript:void(0);"><div class="icon-circle bg-blue-grey"><i class="material-icons">comment</i></div><div class="menu-info"><h4>'+result[i].title+'</h4></div></a></li>');
            break;
            case 3:
            $('#notifications').append('<li><a href="javascript:void(0);"><div class="icon-circle bg-purple"><i class="material-icons">settings</i></div><div class="menu-info"><h4>'+result[i].title+'</h4></div></a></li>');
            break;
            case 4:
            $('#notifications').append('<li><a href="javascript:void(0);"><div class="icon-circle bg-light-green"><i class="material-icons">person_add</i></div><div class="menu-info"><h4>'+result[i].title+'</h4></div></a></li>');
            break;
            case 5:
            $('#notifications').append('<li><a href="javascript:void(0);"><div class="icon-circle bg-yellow"><i class="material-icons">person_add</i></div><div class="menu-info"><h4>'+result[i].title+'</h4></div></a></li>');
            break;
            default:
            result[i].marker = "";
          }
        }
      }});
    });
@endforeach
    </script>
@endsection


