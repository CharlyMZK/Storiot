<?php
/* Smarty version 3.1.31, created on 2017-12-18 10:36:09
  from "/home/ubuntu/workspace/templates/Layouts/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a379a19a43906_56006714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ea304d617030547ca01bdd53bc64c96800a96a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/layout.tpl',
      1 => 1513593232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Layouts/head.tpl' => 1,
    'file:Layouts/navbar.tpl' => 1,
    'file:Layouts/carousel.tpl' => 1,
    'file:Layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5a379a19a43906_56006714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <?php $_smarty_tpl->_subTemplateRender('file:Layouts/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <body>
    <?php $_smarty_tpl->_subTemplateRender('file:Layouts/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
    <?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {?> <?php $_smarty_tpl->_subTemplateRender('file:Layouts/carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }?>
    <section id="splash-blue">
      <div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17977493685a379a19a40493_56966479', "body");
?>

      </div>
    </section>
    
    <?php $_smarty_tpl->_subTemplateRender('file:Layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </body>
</html><?php }
/* {block "body"} */
class Block_17977493685a379a19a40493_56966479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17977493685a379a19a40493_56966479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
