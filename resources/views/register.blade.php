<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="registroModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">Registro</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ URL::to('/UserPanel') }}" name="registerForm" id="registerForm">
                  @csrf
                    <div class="form-group">
                        <div class="icons" id="email-icon"></div>
                         <input type="text" id="email" class="form-control" name="username" placeholder="Email">
                         
                    </div>
                    <div class="form-group">
                        <div class="icons" id="password-icon"></div>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Contraseña"> 
                    </div> 
                    <div class="form-group">
                        <div class="icons" id="password-icon"></div>
                        <input type="password" id="repassword" class="form-control" name="repassword" placeholder="Repite la contraseña"> 
                    </div>       
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Registrarse</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#"  data-toggle="modal" data-target="#loginModal" data-dismiss="modal" aria-hidden="true">Ya estas logueado?</a>
            </div>
        </div>
    </div>
</div>
<script src="/js/registerValidator.js"></script>   
<script src="/js/jquery.validate.js"></script>   