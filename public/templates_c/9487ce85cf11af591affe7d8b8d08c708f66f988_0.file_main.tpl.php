<?php
/* Smarty version 5.3.1, created on 2024-06-28 00:53:33
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667ded6d6dcb81_18319287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9487ce85cf11af591affe7d8b8d08c708f66f988' => 
    array (
      0 => 'main.tpl',
      1 => 1719528808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667ded6d6dcb81_18319287 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PruebaTecnologicaWeb\\templates';
?><section class="middlePanel">
    <aside class="border-end" id="leftMenu">
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categorias'), 'categoria');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('categoria')->value) {
$foreach0DoElse = false;
?>
            <li><a href="index.php?product=<?php echo $_smarty_tpl->getValue('categoria')['nombre'];?>
"><?php echo $_smarty_tpl->getValue('categoria')['nombre'];?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <!--<li><a href="javascript:createChat()">Chat</a></li>-->
        </ul>
    </aside>
    <div id="mainPanel">
        <?php echo $_smarty_tpl->getValue('headerMessage');?>

        <section class="register_content">
            <div class="bg-light p-4 rounded" id="register_idDivList">
                <?php if ($_smarty_tpl->getValue('usuarioLoged') != '') {?>
                <header class="shadow-sm p-3 mb-3 rounded" id="register_mainMenu">
                    <h2>Listado de usuarios</h2>
                </header>
                
                <section class="mainContent">
                    
                    <div class="tableDiv">

                        <div>Nº</div>
                        <div>Usuario</div>
                        <div>Nombre</div>
                        <div>Apellido</div>
                        <div>E-mail</div>
                        <div>Accion</div>

                        <?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('result')) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new \Smarty\Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                            
                        <div><?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['id'];?>
</div>
                        <div><?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['usuario'];?>
</div>
                        <div><?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['nombre'];?>
</div>
                        <div><?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['apellido'];?>
</div>
                        <div><?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['email'];?>
</div>
                        <div>
                            
                            <a href="index.php?action=modify&id=<?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['id'];?>
"><img src="img/ico/action_edit.png" width="20"></a>
                            <a href="index.php?action=borrar&id=<?php echo $_smarty_tpl->getValue('result')[($_smarty_tpl->getValue('__smarty_section_index')['index'] ?? null)]['id'];?>
"><img src="img/ico/action_erase.png" width="20"></a>
                        </div>
                        <?php
}
}
?>

                    </div>
                    
                    
                </section>
                <?php }?>
            </div>
        </section>
    </div>
</section><?php }
}
