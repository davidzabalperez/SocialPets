<link rel="stylesheet" type="text/css" href="/css/login.css">


<div id="cambioRolModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
<!--                 <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>   -->
                <h4 class="modal-title">Lista de usuarios</h4> <div class="icons" id="banear-icon"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                  @csrf
                    <div class="form-group">
                         <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Usuario</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                              <td>{{$usuario->name}}</td>
                              <td><a href="{{ url('/usuario/' .$usuario->id. '/edit') }}">Editar</td>
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
