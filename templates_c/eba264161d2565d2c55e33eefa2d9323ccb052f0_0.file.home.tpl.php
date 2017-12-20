<?php
/* Smarty version 3.1.31, created on 2017-12-20 10:11:00
  from "/home/ubuntu/workspace/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a37345e3512_58772852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eba264161d2565d2c55e33eefa2d9323ccb052f0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/home.tpl',
      1 => 1513758294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cards/itemCard.tpl' => 3,
  ),
),false)) {
function content_5a3a37345e3512_58772852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6012826225a3a37345d3f66_54536979', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_6012826225a3a37345d3f66_54536979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6012826225a3a37345d3f66_54536979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Nouveautés</h4>
    </div>
  </div>
  <div class="col s12 m12 item-row">
    <?php $_smarty_tpl->_subTemplateRender('file:Cards/itemCard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemToDisplay'=>$_smarty_tpl->tpl_vars['newItems']->value), 0, false);
?>

  </div>
  <div class="more-row center">
    <a href="/catalogue" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-promo">Promotions</h4>
  </div>
  <div class="col s12 m12 item-row">
    <?php $_smarty_tpl->_subTemplateRender('file:Cards/itemCard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemToDisplay'=>$_smarty_tpl->tpl_vars['promotedItems']->value), 0, true);
?>

  </div>
  <div class="more-row center">
    <a class="btn waves-effect waves-light brown-background" href="/catalogue" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-best">Best sellers</h4>
  </div>
  <div class="col s12 m12 item-row">
    <?php $_smarty_tpl->_subTemplateRender('file:Cards/itemCard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemToDisplay'=>$_smarty_tpl->tpl_vars['bestReviewItems']->value), 0, true);
?>

  </div>
  <div class="more-row center">
    <a href="catalogue" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/home.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
