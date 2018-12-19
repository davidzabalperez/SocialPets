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

    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input name="email" id="email" type="text" placeholder="Email">
                    <input name="password" id="password" type="password" placeholder="Contraseña">
                    
                    <button class="btn btn-info btn-block login" type="submit">Entrar</button>
                </form>
            </div>
        </div>
        
</div>
</body>
<script src="/js/jquery.validate.js"></script> 
<script src="/js/loginRegisterValidator.js"></script>
</html>