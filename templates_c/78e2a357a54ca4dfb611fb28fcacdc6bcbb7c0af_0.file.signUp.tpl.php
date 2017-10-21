<?php
/* Smarty version 3.1.31, created on 2017-10-13 07:06:08
  from "/home/ubuntu/workspace/templates/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e065e0433879_86374418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78e2a357a54ca4dfb611fb28fcacdc6bcbb7c0af' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signUp.tpl',
      1 => 1507878360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e065e0433879_86374418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4697850959e065e042b350_21268469', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_4697850959e065e042b350_21268469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4697850959e065e042b350_21268469',
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
            <form id="signUpForm" onSubmit="onSubmit()">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="mail" type="text" class="validate">
                    <label for="mail">Email</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="confirmPassword" type="password" class="validate">
                    <label for="confirmPassword">Confirmation du mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="lastName" type="text" class="validate">
                    <label for="lastName">Nom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="firstName" type="text" class="validate">
                    <label for="firstName">Prenom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10" style="color:grey;">
                  &nbsp; Sexe : &nbsp;

                  <p>
                    <input name="sexGroup" type="radio" id="maleSex" />
                    <label for="maleSex">Homme</label>
                  </p>
                  <p>
                    <input name="sexGroup" type="radio" id="femaleSex" />
                    <label for="femaleSex">Femme</label>
                  </p>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="zip" type="text" class="validate">
                    <label for="zip">Code postal</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="address" type="text" class="validate">
                    <label for="address">Adresse postale</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="phone" type="text" class="validate">
                    <label for="phone">Téléphone</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
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
