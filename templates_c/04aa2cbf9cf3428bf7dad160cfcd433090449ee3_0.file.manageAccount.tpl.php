<?php
/* Smarty version 3.1.31, created on 2017-12-11 15:15:40
  from "/home/ubuntu/workspace/templates/manageAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2ea11cd489a3_27916353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04aa2cbf9cf3428bf7dad160cfcd433090449ee3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageAccount.tpl',
      1 => 1513005338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2ea11cd489a3_27916353 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ubuntu/workspace/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10303133035a2ea11cd0a552_86481194', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_10303133035a2ea11cd0a552_86481194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10303133035a2ea11cd0a552_86481194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Gestion du compte</h4>
  </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<div class="card dark">
  <div class="card-tabs indicator blue">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#informationCard">Informations</a></li>
      <li class="tab"><a href="#passwordCard">Mot de passe</a></li>
      <li class="tab"><a href="#addressCard">Adresse</a></li>
      <li class="tab"><a href="#paymentCard">Paiement</a></li>
    </ul>
  </div>
  <div class="card-content">
    <div id="informationCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="email" type="email" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
>
          <label for="email data-error=" erreur="" data-success="ok">Email</label>
        </div>
      </div>
      <div class="col offset-s1 s10" style="color:grey;">
        &nbsp; Genre :
        <p>
          <input class="with-gap" id="male" name="gender" type="radio" value="m" <?php if ($_smarty_tpl->tpl_vars['user']->value->getGender() == 'm') {?>checked<?php }?>/>
          <label for="male">Homme</label>
        </p>
        <p>
          <input class="with-gap" id="female" name="gender" type="radio" value="f" <?php if ($_smarty_tpl->tpl_vars['user']->value->getGender() == 'f') {?>checked<?php }?>/>
          <label for="female">Femme</label>
        </p>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input type="text" id="lastName" pattern="/^[a-Z ,.'-]+$/i" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
>
          <label for="lastName">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="firstName" type="text" pattern="/^[a-Z ,.'-]+$/i" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
>
          <label for="firstName">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="datepicker" id="birthDate" type="time" data-value=<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->getBirthDate(),"%d/%m/%Y");?>
/>
          <label class="active" for="birthDate">Date de naissance</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12 center">
          <button class="btn waves-effect waves-light" id="updateInformation" type="submit">Changer</button>
          <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
        </div>
      </div>
    </div>
    <div id="passwordCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="password" type="password">
          <label for="password">Mot de passe actuel</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="newPassword" type="password">
          <label for="newPassword">Nouveau mot de passe</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="confirmPassword" type="password">
          <label for="confirmPassword">Confirmation du mot de passe</label>
        </div>
      </div>
      <div class="center">
        <button class="btn waves-effect waves-light" id="updatePassword" type="submit">Changer</button>
        <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
      </div>
    </div>
    <div id="addressCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="address" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getAddress();?>
>
          <label for="address">Adresse postale</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="zipCode" type="text" onkeypress="return isNumberKey(event)" maxlength="5" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getZipCode();?>
>
          <label for="zipCode">Code postal</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="city" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
>
          <label for="city">Ville</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="phone" type="text" onkeypress="return isNumberKey(event)" maxlength="10" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhone();?>
>
          <label for="phone">Téléphone</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateAddress" type="submit">Changer</button>
            <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
          </div>
        </div>
      </div>
    </div>
    <div id="paymentCard">
      <table class="striped highlight centered responsive-table">
        <thead>
          <tr>
            <th>Numero</th>
            <th colspan="3">Expiration</th>
            <th>Titulaire</th>
            <th>Supprimer</th>
            <th/>
          </tr>
        </thead>
        <tbody id="paymentCardTable">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creditCards']->value, 'creditCard');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['creditCard']->value) {
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
              <a class="btn-floating waves-effect waves-light red deletePayment" id="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          <tr>
            <form id="manageAccountForm" action="/index.php?module=manageAccount&action=sendForm#paymentCard" method="post">
              <td>
                <div class="input-field">
                  <input class="validate" name="reference" type="text" onkeypress="return isNumberKey(event)" maxlength="16">
                  <label for="reference">Numéro de carte</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input name="expireMonth" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireMonth">Mois</label>
                </div>
              </td>
              <td>/</td>
              <td>
                <div class="input-field">
                  <input name="expireYear" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireYear">Année</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input name="holder" type="text">
                  <label for="holder">Titulaire</label>
                </div>
              </td>
              <td>
                <button class="btn waves-effect waves-light" id="addPayment" type="submit">Ajouter</button>
              </td>
            </form>
          </tr>
        </tbody>
      </table>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <div class="center">
            <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
<div class="page-header">
  <h4 class="header" id="header-main">Commande du <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->getSendDate(),"%d/%m/%Y");?>
</->
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
                <th>Prix</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Quantité</th>
                <th/>
              </tr>
            </thead>
            <tbody class="cart" id="paymentCardTable">. <?php
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
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->getQuantity();?>

                </td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

              </tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
            </tbody>
          </table>

          <br/>
          <div class="center">
            <button class="btn waves-effect waves-light" type="submit">Telecharger la facture</button>
            <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Nous contacter</button>
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
 
<?php } else { ?>
<div class="col offset-s1 s10">
  <div class="input-field col s12">
    <div class="card-panel red">
      <p class="center-align white-text">Veuillez vous connecter pour accéder à cette page</p>
    </div>
  </div>
</div>
<?php }
echo '<script'; ?>
 type="text/javascript" src="js/manageAccount.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
