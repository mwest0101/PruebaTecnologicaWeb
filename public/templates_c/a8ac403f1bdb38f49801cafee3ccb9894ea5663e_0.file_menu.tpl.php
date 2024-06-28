<?php
/* Smarty version 5.3.1, created on 2024-06-27 01:23:20
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667ca2e82e9b13_26199401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ac403f1bdb38f49801cafee3ccb9894ea5663e' => 
    array (
      0 => 'menu.tpl',
      1 => 1719444196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667ca2e82e9b13_26199401 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PruebaTecnologicaWeb\\templates';
?><header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                <span class="usuarioLoged"><?php echo $_smarty_tpl->getValue('usuarioLoged');?>
</span>
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <?php if ($_smarty_tpl->getValue('usuarioLoged') == '') {?>
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                <?php }?>
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>
                <?php if ($_smarty_tpl->getValue('usuarioLoged') != '') {?>
                    <li><a class="dropdown-item" href="index.php?action=modify">Modificar Usuario</a></li>                
                    <li><a class="dropdown-item" href="index.php?action=borrar">Borrar Usuario</a></li>
                <?php }?>
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header><?php }
}
