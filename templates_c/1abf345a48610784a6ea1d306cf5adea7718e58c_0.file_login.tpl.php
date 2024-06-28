<?php
/* Smarty version 5.3.1, created on 2024-06-27 00:03:02
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667c9016075b39_32748316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abf345a48610784a6ea1d306cf5adea7718e58c' => 
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
function content_667c9016075b39_32748316 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PT\\templates';
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
