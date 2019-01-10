<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="loginModal" class="modal fade">

    <div class="modal-dialog modal-login">
        <div class="modal-content">

            <div class="modal-header">

                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">{{ __('Login') }}</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ url('login') }}" name="formulario" id="loginForm">
                  @csrf
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                        <input id="email_login" type="email" class="form-control{{ $errors->has('email_login') ? ' is-invalid' : '' }}" name="email_login" value="{{ old('email_login') }}" placeholder="Email" required autofocus>
                           @if ($errors->has('email_login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email_login') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon">
                        </i>
                        <input id="password_login" type="password" class="form-control{{ $errors->has('password_login') ? ' is-invalid' : '' }}" name="password_login" placeholder="Contraseña" required>
                           @if ($errors->has('password_login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_login') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>      
                    <div class="form-group">

                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >{{ __('Login') }}</button>
                        
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>

<!--<script src="/js/loginRegisterValidator.js"></script> 
<script src="/js/jquery.validate.js"></script>      -->

