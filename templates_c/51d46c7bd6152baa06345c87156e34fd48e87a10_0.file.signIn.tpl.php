<?php
/* Smarty version 3.1.31, created on 2017-11-10 07:47:17
  from "/home/ubuntu/workspace/templates/signIn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0559853596e3_29867993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d46c7bd6152baa06345c87156e34fd48e87a10' => 
    array (
      0 => '/home/ubuntu/workspace/templates/signIn.tpl',
      1 => 1510242324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0559853596e3_29867993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18266703465a055985353ca2_26647026', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_18266703465a055985353ca2_26647026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18266703465a055985353ca2_26647026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="signInForm" action="/index.php?page=signIn" method="post">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="email" name="email" type="email">
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" id="password" name="password" type="password">
                    <label for="password" data-error="erreur" data-success="ok">Mot de passe</label>
                  </div>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <p class="center">Pas encore inscrit ? <a href="https://storiot-mzkcharly.c9users.io/index.php?page=signUp">Inscrivez vous !</a></p>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Se connecter</button>
                <button class="btn waves-effect red" type="reset">Annuler</button>
              </div>
            </form>
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
