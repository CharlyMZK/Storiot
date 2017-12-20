<?php
/* Smarty version 3.1.31, created on 2017-12-20 12:56:24
  from "/home/ubuntu/workspace/templates/manageOrders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a5df89cbd69_54460915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cab0b4aea13cf3afd53ec6badd444c51a410cf60' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageOrders.tpl',
      1 => 1513774579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a5df89cbd69_54460915 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ubuntu/workspace/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3553621025a3a5df89b17a4_03347276', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_3553621025a3a5df89b17a4_03347276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3553621025a3a5df89b17a4_03347276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header">Gestion des commandes</h4>
    </div>
  </div>
</header>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
<div class="page-header">
  <h4 class="header">Commande du <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->getSendDate(),"%d/%m/%Y");?>
</h4>
</div>
<div class="col m12 offset-m1 s12 l12 offset-l1">
  <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <table class="striped highlight centered responsive-table">
            <thead>
              <tr>
                <th>Article</th>
                <th>Taille</th>
                <th>Poids</th>
                <th>Prix</th>
                <th>Quantité</th>
              </tr>
            </thead>
            <tbody class="cart">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getItemInPackages(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
              <tr>
                <td>
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getName();?>
</a>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getSize();?>
 cm
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getWeight();?>
 g
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->getItem()->getPrice();?>
 €
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->getQuantity();?>

                </td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </tbody>
          </table>
          <br/>
          <div class="center">
            <button class="btn waves-effect waves-light" type="submit">Telecharger la facture</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php echo '<script'; ?>
 src="js/manageAccount.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
