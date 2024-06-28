<?php
/* Smarty version 3.1.39, created on 2021-05-26 22:21:54
  from 'D:\www\UTN_PHPAvanzado_MisEjemplos\03_Templates Php Smarty\13-Smarty-Ejemplo_MiTemplate\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aeade2878bc1_62030800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd78abecd1c90dfb80b636c6e469d4e2f913d18f' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_MisEjemplos\\03_Templates Php Smarty\\13-Smarty-Ejemplo_MiTemplate\\templates\\login.tpl',
      1 => 1622060472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aeade2878bc1_62030800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="register_content">
<?php echo $_smarty_tpl->tpl_vars['messageError']->value;?>
        
        <div class="bg-light p-4 rounded">            
            <div class="row justify-content-center align-items-center">                    

                    <form id="formulario" method="POST">
                        <div class="mb-3">
                            <span class="input-group-text" id="span_usuario">Ususario</span>
                            <input type="text" 
                                   class="form-control" 
                                   name="usuario" 
                                   id="usuario" 
                                   aria-describedby="loginDeUsuario"
                                    
                                   pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                                    
                                   required />
                        </div>

                        <div class="mb-3">
                        <span class="input-group-text" id="span_password">Password</span>
                            <input type="password" 
                            class="form-control" 
                            name="password" 
                            id="password" 
                            aria-describedby="loginDeUsuario" 
                             
                            pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                             
                            required />
                        </div>
                    
                        <div class="col-auto">
                            <button type="Submit" id="bt_login" class="btn btn-outline-primary">Acceder</button>                    
                            <button type="button" class="btn btn-outline-success">
                            <a href="index.php">Regresar</a></button>
                        </div>
                    </form>
                
            </div>
        </div>
</section>
<?php }
}
