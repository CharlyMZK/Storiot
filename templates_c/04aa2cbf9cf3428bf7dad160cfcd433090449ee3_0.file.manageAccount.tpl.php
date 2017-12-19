<?php
/* Smarty version 3.1.31, created on 2017-12-19 19:32:06
  from "/home/ubuntu/workspace/templates/manageAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a39693664b059_00843411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04aa2cbf9cf3428bf7dad160cfcd433090449ee3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageAccount.tpl',
      1 => 1513711734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a39693664b059_00843411 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ubuntu/workspace/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3973024995a396936615179_18569486', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_3973024995a396936615179_18569486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3973024995a396936615179_18569486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Gestion du compte</h4>
    </div>
  </div>
</header>
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
          <input id="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
">
          <label for="email">Email</label>
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
          <input type="text" id="lastName" pattern="[A-z ,.'-]+$" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
">
          <label for="lastName">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="firstName" type="text" pattern="[A-z ,.'-]+$" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
">
          <label for="firstName">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="datepicker" id="birthDate" type="text" data-value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->getBirthDate()," %d/%m/%Y ");?>
"/>
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
          <input id="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getAddress();?>
">
          <label for="address">Adresse postale</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="zipCode" type="text" onkeypress="return isNumberKey(event)" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getZipCode();?>
">
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
          <input id="phone" type="text" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhone();?>
">
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
      <form id="manageAccountForm" action="/index.php?module=manageAccount&action=sendForm#paymentCard" method="post">
        <table class="striped highlight centered responsive-table">
          <thead>
            <tr>
              <th>Numero</th>
              <th colspan="3">Expiration</th>
              <th>Titulaire</th>
              <th>Supprimer</th>
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
              <td>
                <div class="input-field">
                  <input class="validate" id="reference" name="reference" type="text" onkeypress="return isNumberKey(event)" maxlength="16">
                  <label for="reference">Numéro de carte</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input id="expireMonth" name="expireMonth" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireMonth">Mois</label>
                </div>
              </td>
              <td>/</td>
              <td>
                <div class="input-field">
                  <input id="expireYear" name="expireYear" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireYear">Année</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input id="holder" name="holder" type="text">
                  <label for="holder">Titulaire</label>
                </div>
              </td>
              <td>
                <button class="btn waves-effect waves-light" id="addPayment" type="submit">Ajouter</button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
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
 src="js/manageAccount.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
