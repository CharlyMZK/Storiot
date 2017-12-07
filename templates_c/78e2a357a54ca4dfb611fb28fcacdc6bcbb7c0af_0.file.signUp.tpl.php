<?php
/* Smarty version 3.1.31, created on 2017-12-07 14:23:29
  from "/home/ubuntu/workspace/templates/signUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a294ee1b63eb8_82027940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78e2a357a54ca4dfb611fb28fcacdc6bcbb7c0af' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signUp.tpl',
      1 => 1512656372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a294ee1b63eb8_82027940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15291863045a294ee1b54259_04961266', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_15291863045a294ee1b54259_04961266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15291863045a294ee1b54259_04961266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Inscription</h4>
  </div>
</div>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="signUpForm" action="/index.php?module=signUp&action=sendForm" method="post">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
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
                  <input class="validate" name="email" type="text" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
                  <label for="email" data-error="erreur" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="password" type="password">
                  <label for="password" data-error="Le mot de passe doit faire 6 caractère minimum" data-success="ok">Mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="confirmPassword" type="password">
                  <label for="confirmPassword" data-error="erreur" data-success="ok">Confirmation du mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="firstName" type="text" pattern="/^[a-Z ,.'-]+$/i" value=<?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
>
                  <label for="firstName" data-error="erreur" data-success="ok">Prenom</label>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
              </div>
            </div>
          </form>
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
