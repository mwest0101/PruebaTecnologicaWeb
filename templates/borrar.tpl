
<section class="register_content">
{$messageError}        
        <div class="bg-light p-4 rounded">            
            <div class="row justify-content-center align-items-center">                    

                    <form id="formulario" method="POST">
                        <div class="mb-3">
                        
                        <span class="input-group-text" id="span_password">Password</span>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="loginDeUsuario" pattern="[A-Za-z0-9_-]">
                        </div>

                        <div class="mb-3">
                        
                        <span class="input-group-text" id="span_password">Reingrese Password</span>
                            <input type="password" class="form-control" name="rPassword" id="rPassword" aria-describedby="loginDeUsuario" pattern="[A-Za-z0-9_-]">
                        </div>
                    
                        <div class="col-auto">
                            
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Confirmar</button>                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.php">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
</section>
