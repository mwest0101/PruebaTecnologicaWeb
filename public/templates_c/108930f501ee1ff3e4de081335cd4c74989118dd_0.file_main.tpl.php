<?php
/* Smarty version 5.3.1, created on 2024-06-27 00:56:59
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667c9cbb424810_90426844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108930f501ee1ff3e4de081335cd4c74989118dd' => 
    array (
      0 => 'main.tpl',
      1 => 1622006417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667c9cbb424810_90426844 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\www\\PT\\templates';
?>           
            <section class="middlePanel">
                <aside  class="border-end" id="leftMenu">
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

                    
                </div>

            </section>

<?php }
}
