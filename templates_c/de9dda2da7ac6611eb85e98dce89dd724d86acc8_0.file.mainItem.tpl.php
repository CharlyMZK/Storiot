<?php
/* Smarty version 3.1.31, created on 2017-12-18 14:00:36
  from "/home/ubuntu/workspace/templates/mainItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37ca04020401_07554103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9dda2da7ac6611eb85e98dce89dd724d86acc8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mainItem.tpl',
      1 => 1513605627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37ca04020401_07554103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9524046915a37ca040062c5_00760176', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_9524046915a37ca040062c5_00760176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9524046915a37ca040062c5_00760176',
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
<div class="row hide-on-small-only hero-home">
  <div class="row">
    <div class="col s12 m12 item-row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
">
            <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
 type="submit"><i class="material-icons" >add_shopping_cart</i></button>
          </div>
          <div class="card-content">
            <span class="card-title"><a id="item-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" href="/index.php?module=item&id=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
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
