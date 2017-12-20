<?php
/* Smarty version 3.1.31, created on 2017-12-20 15:12:47
  from "/home/ubuntu/workspace/templates/pay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a7defeafd98_45382187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b83498b7d43cb397f9b47b1226980f4ecd18099' => 
    array (
      0 => '/home/ubuntu/workspace/templates/pay.tpl',
      1 => 1513774926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a7defeafd98_45382187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1816094445a3a7defe81f68_28387090', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_1816094445a3a7defe81f68_28387090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1816094445a3a7defe81f68_28387090',
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
<div class="row  hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s12 m11 before-pay-row">
        <div class="card blue-grey darken-1">
          <div class="card-content">
            <h5 class="paymentcard">Information de paiement</h5>
            <div class="row">
              <div class="col offset-s1 s10">
                <table class="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Id commande</th>
                      <th>Id client</th>
                      <th>Email</th>
                      <th>Montant transaction hors taxes</th>
                      <th>Montant transaction</th>
                      <th>Devise</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p id="orderId"><?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
</p>
                      </td>
                      <td>
                        <p id="userid"><?php echo $_smarty_tpl->tpl_vars['userConnected']->value->getId();?>
</p>
                      </td>
                      <td>
                        <p id="email"><?php echo $_smarty_tpl->tpl_vars['userConnected']->value->getEmail();?>

                      </td>
                      <td>
                        <p id="amountWithoutTaxes"><?php echo $_smarty_tpl->tpl_vars['noTaxAmount']->value;?>
</p>
                      </td>
                      <td>
                        <p id="amountWithTaxes"><?php echo $_smarty_tpl->tpl_vars['amountWithTax']->value;?>
</p>
                      </td>
                      <td>
                        <p id="devise">€</p>
                      </td>
                      <td>
                        <p id="date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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
      <div class="row before-pay-row">
        <div class="bill-buttons">
          <button class="btn waves-effect waves-light launch-payment">Payer</button>
          <button class="btn waves-effect waves-dark white black-text cancel">Retour</button>
        </div>
      </div>
      <div class="row after-pay-row">
        <div class="col s12 m11">
          <div class="card blue-grey darken-1">
            <div class="card-content black-text">
              <div class="row">
                <div class="col offset-s1 s10 " id="paymentbox">
                  <img class="profile-img" src="img/logo.png" alt="logo storiot">
                  <div class="payment">
                    <p class="payment-title">Nous procedons au paiement..</p>
                    <p class="payment-subtitle"></p>
                    <p class="payment-informations"></p>
                    <p class="payment-date"></p>
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
                    <div class="row"><i class="col offset-m5 offset-s4 s1 orderfinished material-icons">thumb_up</i></div>
                    <br/>
                    <div class="row">
                      <div class="bill-buttons">
                        <button class="btn waves-effect waves-light btn-pay">Télécharger la facture</button>
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
</div>
<?php echo '<script'; ?>
 src="js/pay.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
