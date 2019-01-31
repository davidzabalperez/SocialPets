@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<p>Filtrar:</p>
<input type="button" value="Machos">
<input type="button" value="Hembras">
<input type="button" value="Todos">
<div class="container" id="app">
  @foreach($dogsMale as $dogMale) 
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dogMale->user_id != Auth::user()->id)
  <div class="box">
  <h3><a href="{{route('dog.show', $dogMale->id)}}">{{$dogMale->name}}</a><onlineuser v-bind:friend="{{ $dogMale }}" v-bind:onlineusers="onlineusers"></onlineuser>
</h3> 
    <h3></h3>
    <div class="box-sub">
    </div>
    <p>Raza: {{$dogMale->race}}</p>
    <p>Edad: {{$dogMale->age}} {{ $dogMale->age > 1 ? 'años' : 'año'}}</p>
    <div class="container">
    <form action="{{ route('friend.store') }}" method="post">
      @csrf
        <button type="submit" class="btn btn-primary" id="like"><i class="fa fa-thumbs-up"></i></button>
        <input name="friend_id" hidden value="{{$dogMale->id}}"/>
      </form>

      <form action="{{ route('friend.destroy',$dogMale->id ) }}" method="post">
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
