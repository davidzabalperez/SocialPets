<div class="container">
  @foreach($usuarios->sortByDesc('id') as $usuario) <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
  <div class="box">
    <h3>{{$usuario->name}}</h3>
    <div class="box-sub">
      <div class="avatar">
      <img src="/storage/avatars/{{ $usuario->avatar }}"/>
    </div>
    </div>
    <p>Raza: {{$usuario->race}}</p>
    @if($usuario->age > 1)
    <p>Edad: {{$usuario->age}} años</p>
    @else
    <p>Edad: {{$usuario->age}} año</p>
    @endif
    <p>Sexo: {{ $usuario->gender == 1 ? 'Femenino' : 'Masculino'}}</p>
    <a class="btn btn-primary btn-sm" id="like" rel="publisher"
       href="">
        <i class="fa fa-thumbs-up"></i>
    </a>
    <a class="btn btn-warning btn-sm" rel="publisher" id="dislike" href="">
        <i class="fa fa-thumbs-down"></i>
    </a>

        
  </div>
@endforeach

</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">

  <div class="carousel-inner">
@foreach($usuarios->sortByDesc('id') as $usuario)
    <div class="carousel-item active">
      
      <div class="box">
      @endforeach

    <h3>{{$usuario->name}}</h3>
    <div class="box-sub">
      <div class="avatar">
      <img src="/storage/avatars/{{ $usuario->avatar }}"/>
    </div>
    </div>
    <p>Raza: {{$usuario->race}}</p>
    @if($usuario->age > 1)
    <p>Edad: {{$usuario->age}} años</p>
    @else
    <p>Edad: {{$usuario->age}} año</p>
    @endif
    <p>Sexo: {{ $usuario->gender == 1 ? 'Femenino' : 'Masculino'}}</p>
    <a class="btn btn-primary btn-sm" id="like" rel="publisher"
       href="">
        <i class="fa fa-thumbs-up"></i>
    </a>
    <a class="btn btn-warning btn-sm" rel="publisher" id="dislike" href="">
        <i class="fa fa-thumbs-down"></i>
    </a>
  </div> 
  
  </div>
  

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
=======
</div>
@include('chatFeed')
