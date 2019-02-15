@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')



<meta name="csrf-token" content="{{ csrf_token() }}"><br><br><br>

<input type="button" value="Todos" id="filtroTodos" class="btn btn-primary">
<input type="button" value="Machos" id="filtroMachos" class="btn btn-primary">
<input type="button" value="Hembras" id="filtroHembras" class="btn btn-primary">
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
  @foreach($dogs->sortByDesc('id') as $dog)
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dog->user_id != Auth::user()->id && !Auth::user()->isFriendsWith($dog->user))
  <div class="box {{ $dog->gender == 1 ? 'hembra' : 'macho'}}">
  <onlineuser v-bind:friend="{{ $dog->user }}" v-bind:onlineusers="onlineusers"></onlineuser>
</h3>

    <div class="box-sub">
      <div class="{{ $dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($dog->avatar != 'user.png')
        <a href="{{route('dog.show', $dog->id)}}"><img src="{{ $dog->avatar }}" /></a>
        @else
        <a href="{{route('dog.show', $dog->id)}}"><img src="/img/user.png"/></a>
        @endif
    </div>
    </div>
    <b><p>Nombre: {{$dog->name}}</p></b>
    <p>Raza: {{$dog->race}}</p>
    <p>Edad: {{$dog->age}} {{ $dog->age > 1 ? 'años' : 'año'}}</p>
    <div class="container likedislikebuttons">
      @if(!Auth::user()->hasFriendRequestPending($dog->user))
      <a class="btn btn-primary" href="{{ route('friend.addFriend', ['id'=>$dog->id]) }}" id="like"> <i class="fa fa-thumbs-up"></i></a>
      @else
      <a class="btn btn-danger" href="/friend/rejectMatch/{{$dog->id}}" id="dislike"> <i class="fa fa-thumbs-down"></i></a>
      @endif
  </div>
  </div>

  @endif
@endforeach
</div>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="js/filtro.js"></script>
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
