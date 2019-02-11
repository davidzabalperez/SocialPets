@extends('layouts.login_master')
@section('content')
<div class="container">
        @if($errors->any())
                  <div class="alert alert-danger">{{$errors->first()}}</div>
                  @endif
            <div class="login-container">
                    <div id="output"></div>
                    <div class="avatar"></div>
                    <div class="form-box">
                        <form action="{{ route('login') }}" method="POST" id="loginForm">
                            @csrf
                             <input id="email_login" type="email" class="form-control{{ $errors->has('email_login') ? ' is-invalid' : '' }}" name="email_login" value="{{ old('email_login') }}" placeholder="Email" autofocus>
                            <input id="password_login" type="password" class="form-control{{ $errors->has('password_login') ? ' is-invalid' : '' }}" name="password_login" placeholder="Contraseña">
                            
                            <button class="btn btn-info btn-block login" type="submit">Entrar</button>
                            <p>¿No estás registrado? <a href="/registro">Registrate</a>
                            ¿Se te ha olvidado la contraseña? <a href="password/reset">Recuperar contraseña</a></p>
                        </form>
                    </div>
                </div>       
        </div> 
@endsection