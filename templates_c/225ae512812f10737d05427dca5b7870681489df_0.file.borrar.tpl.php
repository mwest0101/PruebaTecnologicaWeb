<?php
/* Smarty version 3.1.39, created on 2021-05-26 06:51:24
  from 'D:\www\UTN_PHPAvanzado_MisEjemplos\03_Templates Php Smarty\13-Smarty-Ejemplo_MiTemplate\templates\borrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60add3cc205b58_89725741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225ae512812f10737d05427dca5b7870681489df' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_MisEjemplos\\03_Templates Php Smarty\\13-Smarty-Ejemplo_MiTemplate\\templates\\borrar.tpl',
      1 => 1622004681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60add3cc205b58_89725741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="register_content">
<?php echo $_smarty_tpl->tpl_vars['messageError']->value;?>
        
        <div class="bg-light p-4 rounded">            
            <div class="row justify-content-center align-items-center">                    

                    <form id="formulario" method="POST">
                        <div class="mb-3">
                        
                        <span class="input-group-text" id="span_password">Password</span>
                            <input type="password" class="form-control" name="password" id="password" aria-describedby="loginDeUsuario">
                        </div>

                        <div class="mb-3">
                        
                        <span class="input-group-text" id="span_password">Reingrese Password</span>
                            <input type="password" class="form-control" name="rPassword" id="rPassword" aria-describedby="loginDeUsuario">
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
<?php }
}
