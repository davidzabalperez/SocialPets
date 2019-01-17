    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
          @if(Session::has('success-message'))
    <div class="alert alert-success">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('success-message') !!}
    </div>
          @endif
          @if($errors->any())
          <div class="alert alert-danger"><button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>{{$errors->first()}}</div>
          @endif

      <div class="container-fluid">
        @guest
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo.png" alt="logo" width="120px;"></a>
        @endguest
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto navbar ">
          @guest
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#socialpets">¿Qué es Social Pets?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#caracteristicas">Caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
            </li>
          </ul>

           <ul class="navbar-nav mr navbar">
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#loginModal">Login <i class="fas fa-sign-in-alt"></i></a>
            </li>
           <li class="nav-item">
             @if (Route::has('register'))
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#registroModal">Registro <i class="fas fa-user-circle"></i></a>
             @endguest
            </li>
            @else
            <a class="navbar-brand js-scroll-trigger" href="/UserPanel"><img src="img/logo.png" alt="logo" width="120px;"></a>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile"" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                     <a class="dropdown-item" href="{{ route('UserPanel') }}"><span class="fa fa-paw">
                            {{ __('Home') }}
                        </a>

                    <a class="dropdown-item" href="{{ route('profile') }}"><span class="fa fa-address-card">
                            {{ __('Profile') }}
                        </a>

                    <a class="dropdown-item" href="{{ route('mensajes') }}"><span class="fa  fa-envelope">
                            {{ __('mensaje') }}
                    </a>
                    @if (Auth::user() && Auth::user()->role == 'admin')
                    <a class="dropdown-item" href="{{ route('AdminPanel') }}"><span class="fa  fa-toolbox">
                            {{ __('administrar') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('estadisticas') }}"><span class="fa  fa-chart-pie">
                            {{ __('estadisticas') }}
                    </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><span class="fa  fa-sign-out-alt">
                          {{ __('Logout') }}
                      </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </li>
              <li class="nav-item dropdown">
              <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->

        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw iconNotification"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-alerts" id="notifications">
               <li>
                  <a href="#">
                    <div>
                      <i class="fa fa-comment fa-fw"></i>
                      <span class="pull-right text-muted small"></span>
                    </div>
                  </a>
                </li>

          </ul>
           /.dropdown-alerts
          </li> -->
                  </div>
              </li>
            @endif
            </ul>
        </div>
      </div>
    </nav>
