<?php
/* Smarty version 3.1.31, created on 2017-12-18 16:04:18
  from "/home/ubuntu/workspace/templates/item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37e7024c3bb1_22473533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7923db8fdc743a2f35f9427e677345cc6a38a05' => 
    array (
      0 => '/home/ubuntu/workspace/templates/item.tpl',
      1 => 1513612800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37e7024c3bb1_22473533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12624067215a37e7024a4fa3_95878179', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_12624067215a37e7024a4fa3_95878179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12624067215a37e7024a4fa3_95878179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Fiche produit</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
            <div class="row">
              <div class="card-panel center">
                <img class="responsive-img" src=<?php echo $_smarty_tpl->tpl_vars['item']->value->getImage();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
">
              </div>
              <div class="card-panel center-align">
                <h5><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</h5>
                <p>Description : <?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
                <p>Taille : <?php echo $_smarty_tpl->tpl_vars['item']->value->getSize();?>
 cm</p>
                <p>Poids : <?php echo $_smarty_tpl->tpl_vars['item']->value->getWeight();?>
 g</p>
                <p>Prix : <?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 €</p>
                <button class="btn waves-effect waves-light addToCart" id="add-shopping-cart-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" type="submit">Ajouter au panier</button>
              </div>
            </div>
        </div>
      </div>
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
