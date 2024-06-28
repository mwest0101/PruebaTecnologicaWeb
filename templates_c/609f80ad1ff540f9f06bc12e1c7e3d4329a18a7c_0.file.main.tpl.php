<?php
/* Smarty version 3.1.39, created on 2021-05-26 07:20:20
  from 'D:\www\UTN_PHPAvanzado_MisEjemplos\03_Templates Php Smarty\13-Smarty-Ejemplo_MiTemplate\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60adda94936190_01879007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609f80ad1ff540f9f06bc12e1c7e3d4329a18a7c' => 
    array (
      0 => 'D:\\www\\UTN_PHPAvanzado_MisEjemplos\\03_Templates Php Smarty\\13-Smarty-Ejemplo_MiTemplate\\templates\\main.tpl',
      1 => 1622006417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60adda94936190_01879007 (Smarty_Internal_Template $_smarty_tpl) {
?>           
            <section class="middlePanel">
                <aside  class="border-end" id="leftMenu">
                    <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <li><a href="index.php?product=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</li>                        
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>         
                        <!--<li><a href="javascript:createChat()">Chat</a></li>-->
                    </ul>
                </aside>
                <div id="mainPanel">
                <?php echo $_smarty_tpl->tpl_vars['headerMessage']->value;?>

                    
                </div>

            </section>

<?php }
}
