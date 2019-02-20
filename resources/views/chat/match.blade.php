@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')
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



<div class="container" id="app">
@foreach($requests as $friend)
  @if(Auth::user()->hasFriendRequestReceived($friend))
  <div class="box {{ $friend->dog->gender == 1 ? 'hembra' : 'macho'}}">
  <onlineuser v-bind:friend="{{ $friend->dog->user }}" v-bind:onlineusers="onlineusers"></onlineuser>

    <div class="box-sub">
      <div class="{{ $friend->dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($friend->dog->avatar != 'user.png')
        <a href="{{route('dog.show', $friend->dog->id)}}"><img src="{{ $friend->dog->avatar }}" /></a>
        @else
        <a href="{{route('dog.show', $friend->dog->id)}}"><img src="/img/user.png"/></a>
        @endif
    </div>
    </div>
    <b><p>Nombre: {{$friend->dog->name}}</p></b>
    <p>Raza: {{$friend->dog->race}}</p>
    <p>Edad: {{$friend->dog->age}} {{ $friend->dog->age > 1 ? 'años' : 'año'}}</p>
    <a href="{{ route('friend.acceptFriend', ['id'=>$friend->id]) }}" class="btn btn-primary">Aceptar Match!</a>

  </div>

  @endif
  @endforeach
</div>



<script src="{{ mix('/js/app.js') }}"></script>
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
