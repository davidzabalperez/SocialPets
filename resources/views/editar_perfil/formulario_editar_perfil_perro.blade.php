
<div id="editProfileDogModal" class="modal fade">
        <div class="modal-dialog">
        <div class="modal-content">
          
            <div class="modal-header">
          <h4 id="tituloEditarUsuario" class="modal-title">Editar perfil de {{Auth::user()->dog->name}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <div class="modal-body">
            <form action="{{ route('dog.update', $user->dog->id )}}" method="post">
                @method('PATCH')
                @csrf
                <!--NOMBRE PERRO-->
                <div class="form-group row">
                    <div class="col-6 col-md-6">
                            <input type="hidden" class="form-control" name="id" id="id" value="{{ $user->dog->id }}">
                        <label for="name" class="col col-form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->dog->name }}">
                        <label for="age" class="col col-form-label">Edad</label>
                            <input type="number" name="age" id="age" value="{{ $user->dog->age}}">
                        <label for="gender" class="col col-form-label">Genero</label>
                            <label>
                                <i class="sprites i-hembra-desactivado" id="imagen_hembra">
                                <input type="radio" name="gender" value="1" class="form-control"></i>
                                <i class="sprites i-macho-desactivado" id="imagen_macho">
                                <input type="radio" name="gender" value="0" class="form-control"></i>
                            </label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Cambiar</button>
            </form>
        </div>
        </div>
        </div>
    </div>
    
    