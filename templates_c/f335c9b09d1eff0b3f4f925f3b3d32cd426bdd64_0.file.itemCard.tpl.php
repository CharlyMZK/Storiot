<?php
/* Smarty version 3.1.31, created on 2017-12-20 07:45:46
  from "/home/ubuntu/workspace/templates/Cards/itemCard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a152abb5381_04895200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f335c9b09d1eff0b3f4f925f3b3d32cd426bdd64' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Cards/itemCard.tpl',
      1 => 1513755782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a152abb5381_04895200 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemToDisplay']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null) == 10) {?> <?php
break 1;?> <?php }?>
<div class="col m4 s12">
  <div class="card">
    <div class="card-image">
      <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
">
      <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id="add-shopping-cart-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" type="submit">
            <i class="material-icons" >add_shopping_cart</i>
          </button>
    </div>
    <div class="card-content">
      <span class="card-title">
            <a id="item-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" href="/item/get/<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</a>
          </span>
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
}
}
