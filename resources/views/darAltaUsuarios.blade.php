<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="darAltaModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
<!--                 <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>   -->
                <h4 class="modal-title">Dar de alta</h4> <div class="icons" id="banear-icon"></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                              <form method="POST" action="{{ url('register') }}" name="registerForm" id="registerForm">
                  @csrf
                  <div class="form-group">
                        <i class="icons" id="name-icon"></i>
                         <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre">
                         @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                         
                    </div>
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                         <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="password" id="password_register" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                    </div> 
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="password" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirma la contraseña">
                         @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif 

                    </div>
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                         <input type="number" id="age" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="email" value="{{ old('age') }}" placeholder="Edad">                    
                    </div>
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                        <br>
                        Macho:
                         <input type="radio" class="form-control" name="gender" value="1">
                        Hembra:
                          <input type="radio" class="form-control" name="gender" value="0">      
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="text" id="race" class="form-control" name="race" placeholder="Raza">
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon"></i>
                        <input type="text" id="role" class="form-control" name="role" placeholder="Rol">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Dar de alta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
