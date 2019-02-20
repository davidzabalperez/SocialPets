@extends('layouts.feed_master')
@section('title', 'Favoritos')
@section('content')

<style>
.container p{
    margin-top:-5%;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container" id="app">

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



<div class="panel-block text-white">
 <h4 class="text-white">Perros Favoritos!</h4>
 @foreach($friends as $friend)
@if(Auth::user()->isFriendsWith($friend))

  <div class="box">
  <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineusers"></onlineuser>
  <h3><a href="{{route('dog.show', $friend->dog->id)}}">{{$friend->dog->name}}</a>
</h3>
    <div class="box-sub">
      <div class="{{ $friend->dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($friend->dog->avatar != 'user.png')
      <img src="{{ $friend->dog->avatar }}"/>
      @else
      <img src="/img/user.png"/>
      @endif
    </div>
    </div>
    <p>Dueño/a: {{$friend->dog->user->name}}</p>
    <p>Raza: {{$friend->dog->race}}</p>
    <p>Edad: {{$friend->dog->age}} {{ $friend->dog->age > 1 ? 'años' : 'año'}}</p>

    <a href="{{ route('chat.show', $friend->id) }}" class="panel-block text-white fa fa-comments"  style="justify-content: space-between"></a>

  </div>
  @endif
 @endforeach
</div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
<script>
@foreach($requests as $friend)
  $(document).ready(function() {
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
