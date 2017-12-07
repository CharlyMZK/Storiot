<?php
/* Smarty version 3.1.31, created on 2017-12-07 10:53:47
  from "/home/ubuntu/workspace/templates/recoverPassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a291dbbc9d034_52525342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd114514b3f27f752e8472da09ec52c3c959021df' => 
    array (
      0 => '/home/ubuntu/workspace/templates/recoverPassword.tpl',
      1 => 1512644022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a291dbbc9d034_52525342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13774051035a291dbbc97f29_83441856', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_13774051035a291dbbc97f29_83441856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13774051035a291dbbc97f29_83441856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Récupérer le mot de passe</h4>
  </div>
</div>
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="recoverPasswordForm" action="/index.php?module=recoverPassword&action=sendForm" method="post">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <p>Veuillez renseigner votre adresse email ci-dessous afin de récupérer votre mot de passe</p>
                    </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" name="email" type="email">
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" id="submit" type="submit">Envoyer la demande</button>
                  <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
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
 type="text/javascript" src="js/recoverPassword.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
