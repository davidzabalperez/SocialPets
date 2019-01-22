<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de Administrador - Tabla Usuarios</title>

    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <script src="/js/Chart.min.js"></script>

  </head>
  <body>
       <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/panel_administrador">Panel de Administrador</a>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
                <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><span class="fa  fa-sign-out-alt">
                          {{ __('Cerrar sesión ') }}
                      </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
      </ul>
 

    </nav>
         <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/panel_administrador">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chart_admin/2019">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/tabla_usuarios">
            <i class="fas fa-fw fa-table"></i>
            <span>Usuarios</span></a>
        </li>
      </ul>
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
                    @foreach($usuarios as $usuario)
                    <tr class="targetUser">
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->email}}</td>
                      <td>{{$usuario->role}}</td>
                      <td><a class="btn btn-info" href="{{ url('/usuario/' .$usuario->id. '/edit') }}">Editar</a>
                      <a class="btn btn-danger text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionBanearModal" id="hideModal">Banear</a></td>
                      </tr>
                              <div class="modal fade" id="confirmacionBanearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmación borrar cuenta:
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
                      <td><a class="btn btn-info text-white" rel="publisher" data-toggle="modal" data-target="#confirmacionDesbanearModal" id="hideModal">Desbanear</a>

                          <div class="modal fade" id="confirmacionDesbanearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      <p>Confirmación desbanear cuenta: </p>
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

                        <a class="btn btn-danger text-white">Eliminar</a>
                      </td>
                      </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
              <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SocialPets 2019</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
</body>
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/jquery-easing/jquery.easing.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="/js/buscar.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>
    
</html>