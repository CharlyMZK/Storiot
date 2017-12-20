<?php
/* Smarty version 3.1.31, created on 2017-12-20 10:12:11
  from "/home/ubuntu/workspace/templates/catalogue.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a377be92555_40032251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65048bd3b9b9f90f1114c0028469cc591491777d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/catalogue.tpl',
      1 => 1513758278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cards/itemCard.tpl' => 1,
  ),
),false)) {
function content_5a3a377be92555_40032251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7864334105a3a377be8cd81_40577606', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_7864334105a3a377be8cd81_40577606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7864334105a3a377be8cd81_40577606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Nos articles</h4>
    </div>
  </div>
</header>
<div class="row hero-home">
  <div class="row">
    <div class="col s12 m12 item-row">
      <?php $_smarty_tpl->_subTemplateRender('file:Cards/itemCard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemToDisplay'=>$_smarty_tpl->tpl_vars['items']->value), 0, false);
?>

    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/cart.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
