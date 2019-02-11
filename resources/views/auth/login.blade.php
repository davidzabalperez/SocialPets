@extends('layouts.login_master')
@section('content')
<div class="container">
        @if($errors->any())
                  <div class="alert alert-danger">{{$errors->first()}}</div>
                  @endif
            <div class="login-container container">
                    <div id="output"></div>
                    <div class="avatar"></div>
                    <div class="form-box">
                            <p>Iniciar Sesion</p>
                            <form method="POST" action="{{ url('login') }}" name="formulario" id="loginForm">
                            @csrf
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                           @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password_login" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                @if ($errors->has('password'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('password') }}</strong>
                                         </span>
                                @endif
                                <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            <p>{{ __('Remember Me') }}</p>
                                        </label>
                                    </div>      
                        <div class="form-group">  
                            
                            <button class="btn btn-info btn-block login" type="submit">Entrar</button>
                            <p>¿No estás registrado? <a href="/registro">Registrate</a>
                            ¿Se te ha olvidado la contraseña? <a href="password/reset">Recuperar contraseña</a></p>
                        </form>
                    </div>
                </div>       
        </div> 
@endsection