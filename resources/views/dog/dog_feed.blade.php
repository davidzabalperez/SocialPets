@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')

<div class="container">
  @foreach($dogs->sortByDesc('id') as $dog) 
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dog->user_id != Auth::user()->id)
  <div class="box">
  <h3><a href="{{route('dog.show', $dog->id)}}">{{$dog->name}}</a></h3> 
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




@endsection
