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
            $('#notifications').append('<li><a href="{{route('dog.show', $dog->id)}}"><div class="icon-circle bg-red"><i class="material-icons">delete_forever</i></div><div class="menu-info"><h4>'+result[i].title+'</h4><p>'+result[i].user_id+'</p></div></a></li>');
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