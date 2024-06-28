<?php
/* Smarty version 5.3.1, created on 2024-06-27 01:23:56
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667ca30c2835a0_65241695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96966b608e3e0dbbb738a9b3ebfd2243089b285f' => 
    array (
      0 => 'login.tpl',
      1 => 1622060472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667ca30c2835a0_65241695 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PruebaTecnologicaWeb\\templates';
?>
<section class="register_content">
<?php echo $_smarty_tpl->getValue('messageError');?>
        
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
