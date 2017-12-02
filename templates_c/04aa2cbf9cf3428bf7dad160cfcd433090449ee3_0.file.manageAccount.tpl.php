<?php
/* Smarty version 3.1.31, created on 2017-11-30 15:29:05
  from "/home/ubuntu/workspace/templates/manageAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2023c15a2398_73738499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04aa2cbf9cf3428bf7dad160cfcd433090449ee3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageAccount.tpl',
      1 => 1512055741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2023c15a2398_73738499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17165683625a2023c157d028_89155423', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_17165683625a2023c157d028_89155423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17165683625a2023c157d028_89155423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <input class="validate" id="email" type="email" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
>
            <label for="email data-error=" erreur="" data-success="ok">Email</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input type="text" class="validate" name="lastName" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
>
            <label for="lastName" data-error="erreur" data-success="ok">Nom</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="firstName" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
>
            <label for="firstName" data-error="erreur" data-success="ok">Prenom</label>
          </div>
        </div>
        <div class="col offset-s1 s10" style="color:grey;">
          &nbsp; Genre :
          <p>
            <input id="male" name="gender" type="radio" value="m" checked=<?php echo $_smarty_tpl->tpl_vars['user']->value->getGender();?>
/>
            <label for="male">Homme</label>
          </p>
          <p>
            <input id="female" name="gender" type="radio" value="f" checked=<?php echo $_smarty_tpl->tpl_vars['user']->value->getGender();?>
/>
            <label for="female">Femme</label>
          </p>
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateInformation" type="submit">Changer</button>
            <button class="btn waves-effect red" id="cancelInformation" type="reset">Annuler</button>
          </div>
        </div>
    </div>
    <div id="passwordCard">
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="password" type="password">
            <label for="password" data-error="erreur" data-success="ok">Mot de passe actuel</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="newPassword" type="password">
            <label for="newPassword" data-error="erreur" data-success="ok">Nouveau mot de passe</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="confirmPassword" type="password">
            <label for="confirmPassword" data-error="erreur" data-success="ok">Confirmation du mot de passe</label>
          </div>
        </div>
        <div class="center">
          <button class="btn waves-effect waves-light" id="updatePassword" type="submit">Changer</button>
          <button class="btn waves-effect red" id="cancelPassword" type="reset">Annuler</button>
        </div>
    </div>
    <div id="addressCard">
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="address" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getAddress();?>
>
            <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="zipCode" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getZipCode();?>
>
            <label for="zipCode" data-error="erreur" data-success="ok">Code postal</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="city" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
>
            <label for="city" data-error="erreur" data-success="ok">Ville</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="phone" type="text" value=<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhone();?>
>
            <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
          </div>
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateAddress" type="submit">Changer</button>
            <button class="btn waves-effect red" id="cancelAddress" type="reset">Annuler</button>
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
              <button class="btn waves-effect red deletePayment" value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value->getId();?>
" type="submit">Supprimer</button>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          <tr>
            <td>
              <input class="validate" id="reference" type="text">
              <label for="reference" data-error="erreur" data-success="ok">Numéro de carte</label>
            </td>
            <td>
              <input class="validate" id="expireMonth" type="text">
              <label for="expireMonth" data-error="erreur" data-success="ok">Mois</label>
            </td>
            <td>/</td>
            <td>
              <input class="validate" id="expireYear" type="text">
              <label for="expireYear" data-error="erreur" data-success="ok">Année</label>
            </td>
            <td>
              <input class="validate" id="holder" type="text">
              <label for="holder" data-error="erreur" data-success="ok">Titulaire</label>
            </td>
            <td>
              <button class="btn waves-effect waves-light" id="addPayment" type="submit">Ajouter</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/manageAccount.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
