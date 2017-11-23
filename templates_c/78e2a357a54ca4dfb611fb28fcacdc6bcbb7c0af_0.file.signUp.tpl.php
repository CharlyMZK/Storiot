<?php
/* Smarty version 3.1.31, created on 2017-11-23 14:07:53
  from "/home/ubuntu/workspace/templates/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a16d6394fae15_65396176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78e2a357a54ca4dfb611fb28fcacdc6bcbb7c0af' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signUp.tpl',
      1 => 1511445869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16d6394fae15_65396176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13754637115a16d6394e9c62_14647709', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_13754637115a16d6394e9c62_14647709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13754637115a16d6394e9c62_14647709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Tablet and desktop -->
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="signUpForm" action="/index.php?page=signUp" method="post">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="email" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]<?php echo 2;?>
$">
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="password" name="password" type="password" pattern=".<?php echo 6;?>
">
                    <label for="password" data-error="Le mot de passe doit faire 6 caractère minimum" data-success="ok">Mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="confirmPassword" name="confirmPassword" type="password">
                    <label for="confirmPassword" data-error="erreur" data-success="ok">Confirmation du mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="lastName" name="lastName" type="text" pattern="/^[a-Z ,.'-]+$/i">
                    <label for="lastName" data-error="erreur" data-success="ok">Nom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="firstName" name="firstName" type="text" pattern="/^[a-Z ,.'-]+$/i">
                    <label for="firstName" data-error="erreur" data-success="ok">Prenom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10" style="color:grey;">
                  &nbsp; Genre : &nbsp;
                  <p>
                    <input id="maleGender" name="genderGroup" type="radio" />
                    <label for="maleGender">Homme</label>
                  </p>
                  <p>
                    <input id="femaleGender" name="genderGroup" type="radio" />
                    <label for="femaleGender">Femme</label>
                  </p>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="address" name="address" type="text">
                    <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="zipCode" name="zipCode" type="text">
                    <label for="zipCode" data-error="erreur" data-success="ok">Code postal</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="city" name="city" type="text">
                    <label for="city" data-error="erreur" data-success="ok">Ville</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="phone" name="phone" type="text">
                    <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                  <button class="btn waves-effect red" type="reset">Retour</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/signUp.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
