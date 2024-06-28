<?php
/* Smarty version 5.3.1, created on 2024-06-27 00:13:10
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667c92768471a5_98397136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869f89189368491b8872d03b490babf0c8ab9e25' => 
    array (
      0 => 'register.tpl',
      1 => 1622062705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667c92768471a5_98397136 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PT\\templates';
?>
    <section class="register_content">
    <div class="bg-light p-4 rounded" id="register_idDivForm">
      <header class="shadow-sm p-3 mb-3 rounded" id="register_mainMenu">
        <h2><?php echo $_smarty_tpl->getValue('title_regOmod');?>
</h2>
      </header>
        
        <section class="mainContent">
          
          <form id="formulario" name="formulario" class="row g-3" method="POST">
            <?php echo $_smarty_tpl->getValue('messageError')['usuario'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_usuario">Usuario</span>
              <input type="text" class="form-control" placeholder="usuario"
                aria-label="usuario"
                name="usuario"
                id="usuario"
                value="<?php echo $_smarty_tpl->getValue('usuario');?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                 
              />
            </div>
            <?php echo $_smarty_tpl->getValue('messageError')['nombre'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_nombre">Nombre</span>
              <input type="text" class="form-control" placeholder="nombre" 
              aria-label="nombre" 
              name="nombre" 
              id="nombre" 
              value="<?php echo $_smarty_tpl->getValue('nombre');?>
"
              aria-describedby="registracionDeUsuario"
               
                pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
               
              />
            </div>
            <?php echo $_smarty_tpl->getValue('messageError')['apellido'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_apellido">Apellido</span>
              <input
                type="text"
                class="form-control"
                placeholder="apellido"
                aria-label="apellido"
                name="apellido"
                id="apellido"
                value="<?php echo $_smarty_tpl->getValue('apellido');?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                 
              />
            </div>
            <?php echo $_smarty_tpl->getValue('messageError')['dni'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_dni">Dni</span>
              <input
                type="text"
                class="form-control"
                placeholder="dni"
                aria-label="dni"
                name="dni"
                id="dni"
                value="<?php echo $_smarty_tpl->getValue('dni');?>
"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                 
              />
            </div>
            <?php echo $_smarty_tpl->getValue('messageError')['condicion'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_condicion">Condición</span>
              <select
                class="form-control"
                name="condicion"
                id="condicion" 
                value="<?php echo $_smarty_tpl->getValue('condicion');?>
"
                aria-describedby="registracionDeUsuario">                
                <?php if ($_smarty_tpl->getValue('condicion') == "admin") {?>
                  <option selected="true" value="admin">Administrador</option>
                  <option value="user">Usuario</option>                      
                <?php } else { ?>
                  <option selected="true" value="user">Usuario</option>
                  <option value="admin">Administrador</option>            
                <?php }?>
                
              </select>
            </div>
          
            <?php echo $_smarty_tpl->getValue('messageError')['passwordDitinct'];?>

            <?php echo $_smarty_tpl->getValue('messageError')['password'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_password">Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                aria-label="Password"
                name="password"
                id="password"                
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                 
              />
            </div>
            <?php echo $_smarty_tpl->getValue('messageError')['rPassword'];?>

            <div class="input-group mb-1">
              <span class="input-group-text" id="span_rPassword">Reingrese Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Reingrese Password"
                aria-label="rPassword"
                name="rPassword"
                id="rPassword"
                aria-describedby="registracionDeUsuario"
                 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                 
              />
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-success" >
                <?php echo $_smarty_tpl->getValue('submitTitle');?>

              </button>
              <button type="button" class="btn btn-outline-primary">
                <a href="index.php">Cancelar</a>
              </button>
            </div>
          </form>
        </section>
      </div>
    </section>

<?php }
}
