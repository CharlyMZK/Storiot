<?php
/* Smarty version 3.1.31, created on 2017-12-18 13:19:13
  from "/home/ubuntu/workspace/templates/pay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37c051068f02_10492776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b83498b7d43cb397f9b47b1226980f4ecd18099' => 
    array (
      0 => '/home/ubuntu/workspace/templates/pay.tpl',
      1 => 1513603107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c051068f02_10492776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16893911375a37c0510541d1_02318966', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_16893911375a37c0510541d1_02318966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16893911375a37c0510541d1_02318966',
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
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content">
            <h5 class="paymentcard">Carte utilisée</h5>
            <div class="row">
              <div class="col offset-s1 s10">
                <table class="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Numero</th>
                      <th>Expiration</th>
                      <th>Titulaire</th>
                    </tr>
                  </thead>
                  <tbody id="paymentCardTable">
                    <tr>
                      <td>
                        <p id="reference"><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getReference();?>
</p>
                      </td>
                      <td>
                        <span id="expireMonth"><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getExpireMonth();?>
</span>/<span id="expireYear"><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getExpireYear();?>
</span>
                      </td>
                      <td>
                        <p id="holder"><?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getHolder();?>
</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s11 m11">
          <div class="card blue-grey darken-1">
            <div class="card-content black-text">
              <div class="row">
                <div class="col offset-s1 s10 ">
                  <img class="profile-img" src="img/logo.png" alt="logo storiot">
                  <div class="payment">
                    <p class="payment-title">Nous procedons au paiement..</h5>
                    <p class="payment-subtitle"></p>
                    <div class="row">
                      <div class="col offset-s5 s1">
                        <div class="preloader-wrapper big active">
                          <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                              <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                              <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                              <div class="circle"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row"><i class="col offset-s5 s1 orderfinished material-icons">thumb_up</i></div>
                    <br/>
                    <div class="row">
                      <div class="bill-buttons"><a class="btn waves-effect waves-light" download="/bill.txt">Télécharger la facture</a>
                        <a href="index.php?module=home" class="btn waves-effect waves-dark white black-text" id="cancel">Retour</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/pay.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
