<?php
/* Smarty version 3.1.31, created on 2017-10-22 16:28:54
  from "/home/ubuntu/workspace/templates/manageAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ecc746ea0522_84096865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04aa2cbf9cf3428bf7dad160cfcd433090449ee3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageAccount.tpl',
      1 => 1508689485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ecc746ea0522_84096865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167947788859ecc746e93f91_23003760', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_167947788859ecc746e93f91_23003760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_167947788859ecc746e93f91_23003760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card dark">
  <div class="card-tabs indicator blue">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#informationsCard">Informations</a></li>
      <li class="tab"><a href="#passwordCard">Mot de passe</a></li>
      <li class="tab"><a href="#addressCard">Adresse</a></li>
      <li class="tab"><a href="#paymentCard">Paiement</a></li>
    </ul>
  </div>
  <div class="card-content">
    <div id="informationsCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="email" type="email">
          <label for="email data-error=" erreur " data-success="ok "">Email</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input type="text" class="validate" id="last_name">
          <label for="last_name" data-error="erreur" data-success="ok">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="first_name" type="text">
          <label for="first_name" data-error="erreur" data-success="ok">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10" style="color:grey;">
        &nbsp; Sexe :
        <p>
          <input id="sex_man" name="sex_group" type="radio" />
          <label for="sex_man">Homme</label>
        </p>
        <p>
          <input id="sex_female" name="sex_group" type="radio" />
          <label for="sex_female">Femme</label>
        </p>
        <div class="center">
          <button class="btn waves-effect waves-light" type="submit">Changer</button>
          <button class="btn waves-effect red" type="reset">Annuler</button>
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
        <button class="btn waves-effect waves-light" type="submit">Changer</button>
        <button class="btn waves-effect red" type="reset">Annuler</button>
      </div>
    </div>
    <div id="addressCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="address" type="text">
          <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="zip" type="text">
          <label for="zip" data-error="erreur" data-success="ok">Code postal</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="city" type="text">
          <label for="city" data-error="erreur" data-success="ok">Ville</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="validate" id="phone" type="text">
          <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
        </div>
        <div class="center">
          <button class="btn waves-effect waves-light" type="submit">Changer</button>
          <button class="btn waves-effect red" type="reset">Annuler</button>
        </div>
      </div>
    </div>
    <div id="paymentCard">
      <table class="striped highlight centered responsive-table">
        <thead>
          <tr>
            <th>Numero</th>
            <th>Expiration</th>
            <th>Titulaire</th>
            <th/>
          </tr>
        </thead>
        <tbody id="paymentCardTable">
          <tr>
            <td>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="cardNumber" type="text">
                  <label for="cardNumber" data-error="erreur" data-success="ok">Numéro de carte</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="cardExpireDate" type="text">
                  <label for="cardcardExpireDateNumber" data-error="erreur" data-success="ok">Jour/mois</label>
                </div>
              </div>
            </td>
            <td>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="cardHolder" type="text">
                  <label for="cardHolder" data-error="erreur" data-success="ok">Titulaire</label>
                </div>
              </div>
            </td>
            <td/>
            <td>
              <button class="btn waves-effect waves-light" type="submit">Ajouter</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php
}
}
/* {/block "body"} */
}
