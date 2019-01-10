<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/grayscale.css" >

<link rel="stylesheet" type="text/css" href="css/RegisterLogin-view.css" >
<link rel="stylesheet" type="text/css" href="css/login.css" >
<body>
    @include('layouts.navbarLoginRegister')
<div class="container">

    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">

                <form action="/register2" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                    Edad del perro:
                    <input type="number" id="age" class="form-control" name="age" placeholder="Años de persona">
                    <br>
                    Genero del perrro:
                    <br>
                    Hembra
                    <input type="radio" name="gender" value="1" class="form-control">
                    Macho 
                    <input type="radio" name="gender" value="0" class="form-control">
                    <br>
                    raza:
                    <input type="text" name="race" id="race">
                
                    <button class="btn btn-info btn-block login" type="submit">Terminar registro</button>
                </form>
            </div>
        </div>      
</div>
</body>
<script src="/js/loginRegisterValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>

</html>