<!DOCTYPE html>
<html>
<head>
    <title>Nuevo usuario</title>
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

                <form action="{{ url('/user/'.$user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    Nombre:<input type="text" id="name" name="name" value="{{ $user->name }}"><br>

                    Email:<input type="email" id="email" name="email" value="{{ $user->email }}"><br>

                    Edad:<input type="number" id="age" name="age" value="{{ $user->age }}"><br>

                    Género:<select>
                        <option value="0">Masculino</option>
                        <option value="1">Femenino</option>
                    </select><br>

                    Raza:<input type="text" id="race" name="race" value="{{ $user->race }}"><br>

                    Rol:<input type="text" id="role" name="role" value="{{ $user->role }}"><br>

                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>      
</div>
</body>

</html>