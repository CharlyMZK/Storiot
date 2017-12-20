<?php
/* Smarty version 3.1.31, created on 2017-12-20 10:11:00
  from "/home/ubuntu/workspace/templates/Layouts/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a3734600240_18363555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ea304d617030547ca01bdd53bc64c96800a96a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/layout.tpl',
      1 => 1513758257,
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
function content_5a3a3734600240_18363555 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7870737915a3a37345fd1d0_44000391', "body");
?>

    </div>
  </section>

  <?php $_smarty_tpl->_subTemplateRender('file:Layouts/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
/* {block "body"} */
class Block_7870737915a3a37345fd1d0_44000391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7870737915a3a37345fd1d0_44000391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
