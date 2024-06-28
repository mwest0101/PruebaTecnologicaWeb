<?php
/* Smarty version 5.3.1, created on 2024-06-27 00:58:00
  from 'file:borrar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667c9cf8cb82f9_35452656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335c4b51261d42aad7addd7932131480a375e8fa' => 
    array (
      0 => 'borrar.tpl',
      1 => 1622054135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667c9cf8cb82f9_35452656 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PT\\templates';
?>
<section class="register_content">
<?php echo $_smarty_tpl->getValue('messageError');?>
        
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
<?php }
}
