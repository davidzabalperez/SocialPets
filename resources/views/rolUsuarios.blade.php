<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="cambioRolModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
<!--                 <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>   -->
                <h4 class="modal-title">Lista de usuarios a cambiar rol</h4> <div class="icons" id="banear-icon"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                  @foreach($usuarios as $usuario)
                <form  action="{{ route('user.edit', $usuario->id) }}" method="POST">
                  @method('PATCH')
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
                              <td>
                              <input type="text" name="skere">
                              <button type="submit">Guardar</button></td>
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
