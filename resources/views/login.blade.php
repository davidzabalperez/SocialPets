<link rel="stylesheet" type="text/css" href="/css/login.css">

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="/img/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">Login</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="email">
                <form method="POST" action="{{ URL::to('/UserPanel') }}" name="formulario">
                  @csrf
                    <div class="form-group">
                        <div class="icons" id="email-icon"></div>
                         <input type="text" id="email" class="form-control" name="username" placeholder="Email" required="required">
                         
                    </div>
                    <div class="form-group">
                        <div class="icons" id="password-icon"></div>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
                    </div> 
                    <div class="form-group">
                        <div class="icons" id="phone-icon"></div>
                        <input type="text" id="tlf" class="form-control" name="tlf" placeholder="Numero de Telefono" required="required"> 
                    </div>       
                    <div class="form-group">
                        <button type="submit" id="boton" class="btn btn-primary btn-lg btn-block login-btn" disabled="disabled">Login</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<script src="/js/emailValidator.js"></script>    
