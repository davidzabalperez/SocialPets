<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesion</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/grayscale.css" >

<link rel="stylesheet" type="text/css" href="css/RegisterLogin-view.css" >
<body>
    @include('layouts.navbarLoginRegister')
<div class="container">
@if($errors->any())
          <div class="alert alert-danger"><button type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-hidden="true">&times;</button>{{$errors->first()}}</div>
          @endif
    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                    
                    <button class="btn btn-info btn-block login" type="submit">Entrar</button>
                </form>
            </div>
        </div>
        
</div>
</body>
<script src="/js/loginRegisterValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>   
</html>