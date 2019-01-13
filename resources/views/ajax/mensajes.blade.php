@foreach($mensajes as $mensaje)
    <tr>
        <td>{{ $mensaje->id_sender }}</td>
        <td>{{ $mensaje->text }}</td>
    </tr>
    @endforeach
