<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/grayscale.css" >

<link rel="stylesheet" type="text/css" href="css/register-view.css" >
<body>
    @include('layouts.navbarLoginRegister')
<div class="container">

    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="" method="">
                    <input name="name" id="name" type="text" placeholder="Nombre">
                    <input name="email" id="email" type="text" placeholder="Email">
                    <input name="password" id="password" type="password" placeholder="contraseña">
                    <input name="password_confirmation" id="password-confirm" type="password" placeholder="repite la contraseña">
                    <button class="btn btn-info btn-block login" type="submit">Registrar</button>
                </form>
            </div>
        </div>
        
</div>
</body>
</html>