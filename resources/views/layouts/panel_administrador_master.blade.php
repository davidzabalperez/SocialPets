<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

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

  <body id="page-top">

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
        <li class="nav-item">
          <a class="nav-link" href="/tabla_usuarios">
            <i class="fas fa-fw fa-table"></i>
            <span>Usuarios</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tabla_contacto">
            <i class="far fa-envelope"></i>
            <span>Contacto</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              @if (isset(Auth::user()->name))
              <h2>Bienvenido {{ Auth::user()->name }}, estas en el panel de administrador.</h2>
              @endif
            </li>
            
          </ol>

          <!-- Icon Cards-->
    
          <!-- Area Chart Example-->
          @yield('content')

          

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © SocialPets 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
  

    <!-- Bootstrap core JavaScript-->

    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="/js/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/buscar.js"></script>

  </body>

</html>
