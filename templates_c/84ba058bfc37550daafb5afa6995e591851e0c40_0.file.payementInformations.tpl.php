<?php
/* Smarty version 3.1.31, created on 2017-10-26 14:14:46
  from "/home/ubuntu/workspace/templates/payementInformations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1edd6d9f310_07761776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ba058bfc37550daafb5afa6995e591851e0c40' => 
    array (
      0 => '/home/ubuntu/workspace/templates/payementInformations.tpl',
      1 => 1509027283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1edd6d9f310_07761776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133256639459f1edd6d99f69_39325760', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_133256639459f1edd6d99f69_39325760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_133256639459f1edd6d99f69_39325760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="contactForm">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
              </div>
              <div class="col offset-s1 s10">
                <div class="col offset-s1 s10" style="color:grey;">
                  &nbsp; Mode de paiement : &nbsp;
                  <p>
                    <input id="cardPayment" name="paymentGroup" type="radio" />
                    <label for="cardPayment">Carte de crédit</label>
                  </p>
                  <p>
                    <input id="paypalPayment" name="paymentGroup" type="radio" />
                    <label for="paypalPayment">paypal</label>
                  </p>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Suivant</button>
                  <button class="btn waves-effect red" type="reset">Annuler</button>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "body"} */
}
