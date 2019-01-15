<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="banearUsuariosModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
<!--                 <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>   -->
                <h4 class="modal-title">Lista de usuarios a BANEAR</h4> <div class="icons" id="banear-icon"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                  @foreach($usuarios as $usuario)
                <form method="POST" action="{{ route('user.destroy', $usuario->id) }}" name="banearUsuarios" id="banearUsuarios">
                  @csrf
                    <div class="form-group">
                         <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col">Correo</th>
                              <th scope="col">Rol</th>
                              <th scope="col">Cambia rol</th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              <td>{{$usuario->name}}</td>
                              <td>{{$usuario->email}}</td>
                              <td>{{$usuario->role}}</td>
                              <td><a class="btn btn-danger" rel="publisher" data-toggle="modal" data-target="#confirmacionBanearModal" id="hideModal">Banear</a></td>
                              <div class="modal fade" id="confirmacionBanearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                Confirmacion borrar cuenta:
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                <form method="post" action="{{ route('user.destroy', $usuario->id) }}" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
