@extends('layouts.panel_administrador_master')
@section('title', 'Panel de Administrador - Tabla Usuarios')
@section('content')
<div id="content-wrapper">
        <div class="container-fluid">
     <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tabla Usuarios</div>
            <div class="card-body">
              <div class="table-responsive">
 
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                     <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" id="SearchUser" onkeyup="searchUser()" placeholder="Buscar usuario.." title="Type in a name">
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach($usuarios->sortByDesc('id') as $usuario)
                    <tr class="targetUser">
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->email}}</td>
                      <td>{{$usuario->role}}</td>
                      <td><a class="btn btn-info" href="{{ url('/usuario/' .$usuario->id. '/edit') }}">Editar</a>
                      <a class="btn btn-danger text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionBanearModal{{$usuario->id}}" id="hideModal">Banear</a></td>
                      </tr>
                              <div class="modal fade" id="confirmacionBanearModal{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Vas a banear a {{ $usuario->name }}
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                      <form method="post" action="{{ route('user.destroy', $usuario->id) }}" >
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Banear</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>


                  @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Tabla Usuarios baneados</div>
              <div class="card-body">
                <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                     <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" id="SearchUserBan" onkeyup="searchUserBan()" placeholder="Buscar usuario.." title="Type in a name">
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach($usuariosBaneados as $usuariosBaneado)
                    <tr class="targetUserBan">
                      <td>{{$usuariosBaneado->name}}</td>
                      <td>{{$usuariosBaneado->email}}</td>
                      <td>{{$usuariosBaneado->role}}</td>

                      <td><a class="btn btn-info text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionDesbanearModal{{$usuariosBaneado->id}}" id="desbanearModal">Desbanear</a><a class="btn btn-danger text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionEliminarModal{{$usuariosBaneado->id}}" id="eliminarModal">Eliminar</a>
                      </td>

                          <div class="modal fade" id="confirmacionDesbanearModal{{$usuariosBaneado->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      <p>Vas a desbanear a {{ $usuariosBaneado->name }} </p>
                                      <p>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button></p>
                                      <form method="post" action="{{route('desbanearUsuario', $usuariosBaneado->id)}}" >
                                      @csrf
                                      <p><button type="submit" class="btn btn-info">Desbanear</button></p>
                                      </form>
                                    
                                  </div>
                              </div>
                          </div>
                        </div>


                      </td>

                      </tr>
                      <div class="modal fade" id="confirmacionEliminarModal{{$usuariosBaneado->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      ¿Estás seguro de eliminar a {{ $usuariosBaneado->name }} ? Esta acción no se puede revertir
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                      <form method="post" action="{{route('forcedelete', $usuariosBaneado->id)}}" >
                                      @csrf
                                      
                                      <button type="submit" class="btn btn-danger">Eliminar</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>
                  @endforeach
                  </tbody>
                </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
@endsection