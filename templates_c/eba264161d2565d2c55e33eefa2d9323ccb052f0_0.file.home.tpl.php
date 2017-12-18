<?php
/* Smarty version 3.1.31, created on 2017-12-17 15:25:25
  from "/home/ubuntu/workspace/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a368c65520741_19387163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eba264161d2565d2c55e33eefa2d9323ccb052f0' => 
    array (
      0 => '/home/ubuntu/workspace/templates/home.tpl',
      1 => 1513522949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a368c65520741_19387163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13520105005a368c654db7e0_02481254', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_13520105005a368c654db7e0_02481254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13520105005a368c654db7e0_02481254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Nouveautés</h4>
  </div>
</div>
<div class="row">
  <div class="col s12 m12 item-row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newItems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null) == 10) {?> <?php
break 1;?> <?php }?>
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</a></span>
          <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 €</span></p>
        </div>
      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-promo">Promotions</h4>
  </div>
  <div class="col s12 m12 item-row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotedItems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null) == 10) {?> <?php
break 1;?> <?php }?>
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</a></span>
          <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 €</span></p>
        </div>
      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-best">Best sellers</h4>
  </div>
  <div class="col s12 m12 item-row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestReviewItems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null) == 10) {?> <?php
break 1;?> <?php }?>
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</a></span>
          <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 €</span></p>
        </div>
      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
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
