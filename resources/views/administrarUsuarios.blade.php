<link rel="stylesheet" type="text/css" href="/css/login.css">
<script src="/js/buscar.js"></script>

<div id="listarUsuarios" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de usuarios</h4> <!--<div class="icons" id="banear-icon"></div>-->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
                  
            <div class="modal-body">
                    <div class="table-responsive">
                    <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" id="Search" onkeyup="search()" placeholder="Buscar usuario.." title="Type in a name">
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
                    <table class="table">
                  @csrf
                  <thead >
                    
                              <th class="col">Nombre</th>
                              <th class="col">Email</th>
                              <th class="col">Rol</th>
                              <th class="colspan-2">Acción</th>
                          </thead>
                         
                          
                          @foreach($usuarios as $usuario)
                          <tbody class="target">
                              <tr> 
                              <td>{{$usuario->name}}</td>
                              <td>{{$usuario->email}}</td>
                              <td>{{$usuario->role}}</td>
                              <td><a class="btn btn-info" href="{{ url('/usuario/' .$usuario->id. '/edit') }}">Editar</td>
                              <td><a class="btn btn-danger text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionBanearModal" id="hideModal">Banear</a></td>
                              </tr>
                              <div class="modal fade" id="confirmacionBanearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmacion borrar cuenta:
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                      <form method="post" action="{{ route('user.destroy', $usuario->id) }}" >
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Banear</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          
                          </tbody>

                          @endforeach                         
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
