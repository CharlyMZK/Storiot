<?php
/* Smarty version 3.1.31, created on 2017-11-10 07:53:28
  from "/home/ubuntu/workspace/templates/payementInformation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a055af8814de0_66179342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506272255d878c333a1a486ea3057d0092f9b4e1' => 
    array (
      0 => '/home/ubuntu/workspace/templates/payementInformation.tpl',
      1 => 1509027665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a055af8814de0_66179342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17468426355a055af88104c2_21387949', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_17468426355a055af88104c2_21387949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17468426355a055af88104c2_21387949',
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
                    <label for="paypalPayment">Paypal</label>
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
