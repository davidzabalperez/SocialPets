<div id="editProfileModal" class="modal fade">
    <div class="modal-dialog">

    <div class="modal-content">
      <h4 id="tituloEditarUsuario" class="modal-title">Editar perfil de usuario/perro</h4>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
<form action="{{ route('dog.update', $user->dog->id )}}" method="post">
    @method('PATCH')
    @csrf
    <!--NOMBRE -->
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Nombre Perro</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="name" id="name" value="{{ $user->dog->name }}">
      <input type="hidden" class="form-control" name="id" id="id" value="{{ $user->dog->id }}">
    </div>
    <button type="submit" class="btn btn-primary">Cambiar nombre</button>
  </div>
</form>
  <form action="{{ route('user.update', Auth::user()->id )}}" method="post">
    @method('PATCH')
    @csrf
    <!--NOMBRE -->
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Cambiar nombre</button>
  </div>
  <!--EMAIL -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}"> 
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cambiar email</button>
  </div>
</form>
<!--PASSWORD -->
<form method="POST" action="{{ route('changePassword') }}">
  @csrf

  <div class="form-group row">
    <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Contraseña actual</label>
    <div class="col-12 col-md-7">
      <input type="password" class="form-control" id="current-password" name="current-password" required>
      @if ($errors->has('current-password'))
          <span class="help-block">
          <strong>{{ $errors->first('current-password') }}</strong>
      </span>
      @endif
    </div>
  </div>


  <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
      <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Nueva contraseña</label>
      <div class="col-12 col-md-7">
          <input id="new-password" type="password" class="form-control" name="new-password" required>
          @if ($errors->has('new-password'))
              <span class="help-block">
              <strong>{{ $errors->first('new-password') }}</strong>
          </span>
          @endif
      </div>
  </div>

  <div class="form-group row">
      <label for="new-password-confirm" class="col-sm-5 col-form-label col-form-label-sml">Repetir contraseña:</label>

      <div class="col-12 col-md-7">
          <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
      </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
  <button type="submit" class="btn btn-primary btn-sm">
      Cambiar
  </button>
</div>
</div>
</form>



        <form action="{{route('imgur.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p><label for="foto"> Foto:</label><input type="file" name="avatar" class="form-control-file"></p>
            <input type="submit" value="Cambiar imagen" name="submit" class="btn btn-primary btn-sm">
            @if (isset($img))
                <img src="{{$img}}" alt="avatar">
            @endif
        </form>

          <div class="modal-body">
                              <br>
              <button class="btn btn-danger btn-sm" rel="publisher" data-toggle="modal" data-target="#deleteModalUser" id="hideModal">Eliminar usuario</button>
                     
                          <div class="modal fade" id="deleteModalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmacion borrar cuenta
                                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                                     

                                      <form method="post" action="{{ route('forcedeleteself',$user->id)}}" >
                                          @csrf
                                          <button type="submit" class="btn btn-danger">Borrar usuario</button>
                                      </form>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
          </div>

                    <div class="modal-body">
                              <br>
              <button class="btn btn-danger btn-sm" rel="publisher" data-toggle="modal" data-target="#deleteModalDog" id="hideModal">Eliminar perro</button>
                     
                          <div class="modal fade" id="deleteModalDog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmacion borrar perro
                                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                                     

                                      <form method="post" action="{{ route('dog.destroy',$user->dog->id)}}" >
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Borrar perro</button>
                                      </form>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
          </div>
      </div>
  </div>
</div>
</div>
