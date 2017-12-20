<?php
/* Smarty version 3.1.31, created on 2017-12-20 11:00:08
  from "/home/ubuntu/workspace/templates/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a42b85daae3_75589495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78e2a357a54ca4dfb611fb28fcacdc6bcbb7c0af' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signUp.tpl',
      1 => 1513758332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a42b85daae3_75589495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4563607175a3a42b85c6574_75823508', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_4563607175a3a42b85c6574_75823508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4563607175a3a42b85c6574_75823508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Inscription</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="signUpForm" action="/signUp/send" method="post">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="img/logo.png" alt="logo storiot">
              </div>
              <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <div class="card-panel red">
                    <p class="center-align white-text"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</p>
                  </div>
                </div>
              </div>
              <?php }?>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="email" name="email" type="email">
                  <label for="email" data-error="L'email n'est pas valide" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="password" name="password" type="password" pattern=".{6,}">
                  <label for="password" data-error="Le mot de passe doit faire 6 caractères minimum" data-success="ok">Mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="confirmPassword" name="confirmPassword" type="password" pattern=".{6,}">
                  <label for="confirmPassword" data-error="Le mot de passe de confirmation doit faire 6 caractères minimum" data-success="ok">Confirmation du mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="col s12" id="radioBtnGender">
                  <span class="radio-text-color">Civilité :</span>
                  <p>
                    <input class="with-gap" id="male" name="gender" type="radio" value="m" />
                    <label for="male">Monsieur</label>
                  </p>
                  <p>
                    <input class="with-gap" id="female" name="gender" type="radio" value="f" />
                    <label for="female">Madame</label>
                  </p>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="lastName" name="lastName" type="text" pattern="^[A-z][A-z ,.'-]*$">
                  <label for="lastName" data-error="Le nom n'est pas valide" data-success="ok">Nom</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="firstName" name="firstName" type="text" pattern="^[A-z][A-z ,.'-]*$">
                  <label for="firstName" data-error="Le prénom n'est pas valide" data-success="ok">Prenom</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="datepicker" id="birthDate" name="birthDate" type="text" />
                  <label class="active" for="birthDate">Date de naissance</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="address" name="address" type="text" pattern="^[0-9]+[A-z ,.'-]+$">
                  <label for="address" data-error="L'adresse n'est pas valide" data-success="ok">Adresse postale</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="zipCode" name="zipCode" type="text" maxlength="5" pattern="[0-9]{5}">
                  <label for="zipCode" data-error="Le code postal doit être composé de 5 chiffres" data-success="ok">Code postal</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="city" name="city" type="text" pattern="[A-z -]{1,30}">
                  <label for="city" data-error="La ville n'est pas valide" data-success="ok">Ville</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="phone" name="phone" type="text" maxlength="10" pattern="[0-9]{10}">
                  <label for="phone" data-error="Le numéro de téléphone doit être composé de 10 chiffres" data-success="ok">Téléphone</label>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                <button class="btn waves-effect waves-dark white black-text" id="cancel">Retour</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/signUp.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
