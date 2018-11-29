<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="noticiaModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">Publicar noticia</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ URL::to('/UserPanel') }}" name="formulario" id="loginForm">
                  @csrf
                    <div class="form-group">
                        <div class="icons" id="email-icon"></div>
                         <input type="text" id="email" class="form-control" name="username" placeholder="Email">
                         
                    </div>
                    <div class="form-group">
                        <div class="icons" id="password-icon"></div>
                        <input type="password" class="form-control" name="password" placeholder="Password"> 
                    </div>      
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" >Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> 
