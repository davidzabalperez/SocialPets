@foreach($mensajes as $mensaje)
        <h5>{{ $mensaje->id_sender }}</h5>
        <p>{{ $mensaje->text }}</p>
    @endforeach
