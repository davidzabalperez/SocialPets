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
                <form method="POST" action="#" name="banearUsuarios" id="banearUsuarios">
                  @csrf
                    <div class="form-group">
                         <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col">Correo</th>
                              <th scope="col">Rol</th>
                              <th scope="col">Banear</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                              <td>{{$usuario->name}}</td>
                              <td>{{$usuario->email}}</td>
                              <td>{{$usuario->role}}</td>
                              <td><div class="icons" id="banear-icon"></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>    
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Banear</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> 