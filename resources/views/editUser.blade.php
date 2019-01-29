<link href="/css/editUsers.css" rel="stylesheet">
<div class="signupSection">
  <div class="info">
    <h2>Editando usuario</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
  </div>
  <form action="{{ route('edituser',$user->id) }}" method="POST" class="signupForm" name="signupform">
    @csrf
    <h2>{{ $user->name }}</h2>
    <ul class="noBullet">
      <li>
        Nombre: <label for="username"></label>
        <input type="text" class="inputFields" id="name" name="name" value="{{ $user->name }}" required/>
      </li>
      <li>
        <label for="email"></label>
        <input type="hidden" class="inputFields" id="email" name="email" value="{{ $user->email }}" required/>
      </li>
      <!-- <li>
        Edad: <label for="age"></label>
        <input type="number" class="inputFields" id="age" name="age" min="0" value="{{ $user->age }}"/>
      </li>
      <li>
        Genero: <label for="gender" class="custom-select">
            <select name="gender" id="gender"> 
                        <option value="0" class="option">Masculino</option>
                        <option value="1" class="option">Femenino</option>
                    </select>
        </label>
      </li>
      <li>
        Raza: <label for="race"></label>
        <input type="text" class="inputFields" id="race" name="race" value="{{ $user->race }}"/>
      </li> -->
      <li>
          Rol: <label for="role">
            <select name="role" id="role">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
      </li>
      <br>
      <a href="/tabla_usuarios">Volver atrás</a>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="guardar" alt="Join" value="Guardar">
      </li>
    </ul>
  </form>
</div>