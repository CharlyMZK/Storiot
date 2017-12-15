<?php
/* Smarty version 3.1.31, created on 2017-12-15 15:59:45
  from "/home/ubuntu/workspace/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a33f1712db0b7_30423601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02c0238916691175678e058dafde2add92ecacd' => 
    array (
      0 => '/home/ubuntu/workspace/templates/cart.tpl',
      1 => 1513353579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33f1712db0b7_30423601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18999138075a33f171283be9_95229776', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_18999138075a33f171283be9_95229776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18999138075a33f171283be9_95229776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Panier</h4>
  </div>
</div>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form action="?module=pay&action=pay" method="POST">
            <table class="striped highlight centered responsive-table">
              <thead>
                <tr>
                  <th>Article</th>
                  <th>Prix</th>
                  <th>Poids</th>
                  <th>Taille</th>
                  <th>Quantité</th>
                  <th>Supprimer</th>
                  <th/>
                </tr>
              </thead>
              <?php if ((count($_smarty_tpl->tpl_vars['itemsInCart']->value)) > 0) {?>
              <tbody class="cart" id="paymentCardTable">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemsInCart']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                  <td>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getName();?>
</a>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getPrice();?>
 €
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getWeight();?>
 g.
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getSize();?>
 cm
                  </td>
                  <td>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
" type="number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getQuantity();?>
" class="input-quantity item-<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
-quantity">
                  </td>
                  <td>
                    <a id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
" class="item-<?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getId();?>
 remove-item btn-floating waves-effect waves-light red">
                        <i class="material-icons">delete</i>
                      </a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <td>
                  <p class="recap">Total HT : <?php echo $_smarty_tpl->tpl_vars['noTaxAmount']->value;?>
 €<br/> Total TTC : <?php echo $_smarty_tpl->tpl_vars['amountWithTax']->value;?>
 €</p>
                </td>
                </tr>

              </tbody>
              <?php }?>
            </table>

            <br/> <?php if ((count($_smarty_tpl->tpl_vars['itemsInCart']->value)) > 0) {?>
            <div class="center">
              <button class="btn waves-effect waves-light" type="submit">Commander</button>
              <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
            </div>
            <?php }?>
          </form>
        </div>
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
