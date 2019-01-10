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
                     @if($errors->any())
          <div class="alert alert-danger">{{$errors->first()}}</div>
          @endif
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ route('login') }}" name="formulario" id="loginForm">
                  @csrf
                    <div class="form-group">
                        <i class="icons" id="email-icon"></i>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                        <i class="icons" id="password-icon">
                        </i>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
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
@if (session('loginError') || Session::has('errors'))
        <script>
            $('#loginModal').modal('show');
        </script>
@endif
<script src="/js/loginRegisterValidator.js"></script> 
<script src="/js/jquery.validate.js"></script>      

