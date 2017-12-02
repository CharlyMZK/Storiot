<?php
/* Smarty version 3.1.31, created on 2017-12-02 10:24:30
  from "/home/ubuntu/workspace/templates/mainItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a227f5e7b7045_57386407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9dda2da7ac6611eb85e98dce89dd724d86acc8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mainItem.tpl',
      1 => 1512210269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a227f5e7b7045_57386407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14666282195a227f5e7aade4_31169409', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_14666282195a227f5e7aade4_31169409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14666282195a227f5e7aade4_31169409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Tablet and desktop -->
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
>
                <button type = "submit" class="btn-floating button-floating-1 waves-effect waves-light deep-purple darken-3" id="addToCart"><i class="material-icons" >add_shopping_cart</i></button>
                <!-- <a class="btn-floating button-floating-1 waves-effect waves-light deep-purple darken-3"><i class="material-icons" id="addToCard">add_shopping_cart</i></a> -->
                <a class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3"><i class="material-icons">trending_up</i></a>
              </div>
              <div class="card-content">
                <span class="card-title" id = "item"><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
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



</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/cart.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
