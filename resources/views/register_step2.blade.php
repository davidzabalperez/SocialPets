<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/grayscale.css" >

<link rel="stylesheet" type="text/css" href="css/RegisterLogin-view.css" >
<link rel="stylesheet" type="text/css" href="css/login.css" >

        <!-- Script para el mapa OSV -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
   <!-- Geocoder controller -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>

<body>
    @include('layouts.navbarLoginRegister')
<div class="container">

    <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">

                <form action="/register2" method="post" onkeypress="return event.keyCode != 13;"> <!-- Al presionar enter no hace submit, porque tendría conflictos con el buscador -->
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                    Nombre del perro:
                    <input type="text" name="name" id="name" placeholder="nombre del perro">
                    Edad del perro:
                    <input type="number" name="age" id="age" min="0" class="form-control"  placeholder="Años de persona">
                    <br>
                    Genero del perro:
                    <br>
                    Hembra
                    <input type="radio" name="gender" value="1" class="form-control">
                    Macho 
                    <input type="radio" name="gender" value="0" class="form-control">
                    <br>
                    raza:
                    <input type="text" name="race" id="race">
                    <h3>Localización:</h3>
                    <h4>Haz click en el mapa para guardar tu localización</h4>
                    <div id="mapid">
                    </div>
                    <input type="hidden" name="lat" id="lat" value="" readonly>
                    <input type="hidden" name="lng" id="lng" value="" readonly>
                    <button class="btn btn-info btn-block login" type="submit">Terminar registro</button>
                </form>
            </div>
        </div>      
</div>
</body>
<script src="/js/loginRegisterValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>
<!-- Mapa -->
<script src="/js/geocoder.js"></script>
<script src="/js/marcadores_mapa.js"></script>
</html>