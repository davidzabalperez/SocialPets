@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}"><br><br><br>

<a class="nav-link js-scroll-trigger" href="{{ route('dogsMale') }}">
                            {{ __('Machos') }}
                        </a>
<a class="nav-link js-scroll-trigger" href="{{ route('dogsFemale') }}">
                            {{ __('Hembras') }}
                        </a>
<a class="nav-link js-scroll-trigger" href="{{ route('dogsFemale') }}">
                            {{ __('Todos') }}
                        </a>
<div class="container" id="app">
  @foreach($dogs->sortByDesc('id') as $dog) 
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dog->user_id != Auth::user()->id)
  <div class="box">
  <h3><a href="{{route('dog.show', $dog->id)}}">{{$dog->name}}</a><onlineuser v-bind:friend="{{ $dog }}" v-bind:onlineusers="onlineusers"></onlineuser>
</h3> 
    <h3></h3>
    <div class="box-sub">
      <div class="{{ $dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="/public/uploads/{{ $dog->avatar }}"/>
    </div>
    </div>
    <p>Raza: {{$dog->race}}</p>
    <p>Edad: {{$dog->age}} {{ $dog->age > 1 ? 'años' : 'año'}}</p>
    <div class="container">
    <form action="{{ route('friend.store') }}" method="post">
      @csrf
        <button type="submit" class="btn btn-primary" id="like"><i class="fa fa-thumbs-up"></i></button>
        <input name="friend_id" hidden value="{{$dog->id}}"/>
      </form>

      <form action="{{ route('friend.destroy',$dog->id ) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger" id="dislike"><i class="fa fa-thumbs-down"></i></button>

    </form>
  </div>
        
  </div>

  @endif
@endforeach
</div>
<script src="{{ mix('/js/app.js') }}"></script>
@endsection
