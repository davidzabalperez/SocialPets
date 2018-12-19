<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/js/registerValidator.js"></script>
<link rel="stylesheet" type="text/css" href="css/grayscale.css" >

<link rel="stylesheet" type="text/css" href="css/RegisterLogin-view.css" >
<body>
    @include('layouts.navbarLoginRegister')
<div class="container">

    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre">
                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                    <input type="password" id="password_register" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
                    <input type="password" id="passwordConfirm" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirma la contraseña">
                    <button class="btn btn-info btn-block login" type="submit">Registrar</button>
                </form>
            </div>
        </div>
        
</div>
</body>
<script src="/js/loginRegisterValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>
</html>