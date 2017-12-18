<?php
/* Smarty version 3.1.31, created on 2017-12-18 07:50:49
  from "/home/ubuntu/workspace/templates/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37735985dbb9_68713567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d46c7bd6152baa06345c87156e34fd48e87a10' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signIn.tpl',
      1 => 1513523640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37735985dbb9_68713567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6369749545a377359848bd8_07826828', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_6369749545a377359848bd8_07826828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6369749545a377359848bd8_07826828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Connexion</h4>
  </div>
</div>
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="signInForm" action="/index.php?module=signIn&action=sendForm" method="post">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="logo storiot">
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
                    <input class="validate" name="email" type="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" name="password" type="password">
                    <label for="password" data-error="erreur" data-success="ok">Mot de passe</label>
                  </div>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <p class="center-align">Pas encore inscrit ? <a href="/index.php?module=signUp">Inscrivez vous !</a> - <a href="/index.php?module=recoverPassword">Mot de passe oublié ?</a></p>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" id="submit" type="submit">Se connecter</button>
                <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/signIn.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
