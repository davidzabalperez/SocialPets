<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="banearUsuariosModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">Lista de usuarios a BANEAR</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="#" name="banearUsuarios" id="banearUsuarios">
                  @csrf
                    <div class="form-group">
                        <div class="icons" id="banear-icon"></div>
                         <ul>
                             <li>Usuario 1</li>
                             <li>Usuario 2</li>
                             <li>Usuario 3</li>
                             <li>Usuario 4</li>
                             <li>Usuario 5</li>
                         </ul>
                    </div>    
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Banear</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> 