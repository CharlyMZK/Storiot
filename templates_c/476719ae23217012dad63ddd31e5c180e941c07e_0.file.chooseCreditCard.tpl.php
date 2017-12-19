<?php
/* Smarty version 3.1.31, created on 2017-12-19 19:31:18
  from "/home/ubuntu/workspace/templates/chooseCreditCard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a396906c4c9f0_50533005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '476719ae23217012dad63ddd31e5c180e941c07e' => 
    array (
      0 => '/home/ubuntu/workspace/templates/chooseCreditCard.tpl',
      1 => 1513711874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a396906c4c9f0_50533005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2032090785a396906c26608_02811910', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_2032090785a396906c26608_02811910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2032090785a396906c26608_02811910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
    <div class="col s12">
        <div class="page-header">
            <h4 class="header" id="header-main">Paiement</h4>
        </div>
    </div>
</header>
<form id="chooseCreditCard" action="/index.php?module=pay&action=pay" method="post">
    <?php if ((count($_smarty_tpl->tpl_vars['creditCards']->value)) > 0) {?>
    <table class="highlight centered responsive-table">
        <thead>
            <tr>
                <th>Numero</th>
                <th colspan="3">Expiration</th>
                <th>Titulaire</th>
                <th>Choix</th>
            </tr>
        </thead>
        <tbody id="paymentCardTable">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creditCards']->value, 'creditCard', false, NULL, 'creditCards', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['creditCard']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_creditCards']->value['index']++;
?>
            <tr>
                <td>
                    <p><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getReference();?>
</p>

                </td>
                <td colspan="3">
                    <p><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getExpireMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getExpireYear();?>
</p>
                </td>
                <td>
                    <p><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getHolder();?>
</p>
                </td>
                <td>
                    <p>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_creditCards']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_creditCards']->value['index'] : null) == 0) {?>
                        <input class="with-gap" id="card<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
" name="creditCard" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
" checked/> <?php } else { ?>
                        <input class="with-gap" id="card<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
" name="creditCard" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
" /> <?php }?>
                        <label for="card<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
</label>
                    </p>
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
    <div class="row"><div class="bill-buttons col m8 offset-m4 s8 offset-s4"><button class="btn-pay btn waves-effect waves-light" id="submit" type="submit">Lancer la commande</button></div></div>
</form>
<?php } else { ?>
<div class="row hide-on-small-only hero-home">
    <div class="col m10 offset-m1 s12 l10 offset-l1">
        <div class="row">
            <div class="col s11 m11">
                <div class="card blue-grey darken-1">
                    <div class="card-content black-text">
                        <div class="row">
                            <div class="col offset-s1 s10 ">
                                <img class="profile-img" src="img/logo.png" alt="logo storiot">
                                <div class="faq">
                                    <h5>Vous n'avez aucune carte de crédit, veuillez en ajouter sur votre profil</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
echo '<script'; ?>
 src="js/pay.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
