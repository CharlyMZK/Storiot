<?php
/* Smarty version 3.1.31, created on 2017-12-18 15:44:26
  from "/home/ubuntu/workspace/templates/recoverPassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37e25a496633_41192740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd114514b3f27f752e8472da09ec52c3c959021df' => 
    array (
      0 => '/home/ubuntu/workspace/templates/recoverPassword.tpl',
      1 => 1513611715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37e25a496633_41192740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671500265a37e25a4765e0_84913659', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_671500265a37e25a4765e0_84913659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_671500265a37e25a4765e0_84913659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Récupérer le mot de passe</h4>
    </div>
  </div>
</header>
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
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
                <?php if ($_smarty_tpl->tpl_vars['successMessage']->value) {?>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <div class="card-panel green">
                      <p class="center-align white-text"><?php echo $_smarty_tpl->tpl_vars['successMessage']->value;?>
</p>
                    </div>
                  </div>
                </div>
                 <?php }?>
                <form id="recoverPasswordForm" action="/index.php?module=recoverPassword&action=sendForm" method="post">
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <p>Veuillez renseigner votre adresse email ci-dessous afin de récupérer votre mot de passe</p>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" name="email" type="email" <?php if ($_smarty_tpl->tpl_vars['email']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>>
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" id="submit" type="submit">Envoyer la demande</button>
                  <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
                </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "body"} */
}
