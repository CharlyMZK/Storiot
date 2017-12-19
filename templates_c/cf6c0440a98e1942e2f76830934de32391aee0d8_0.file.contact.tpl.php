<?php
/* Smarty version 3.1.31, created on 2017-12-18 13:19:59
  from "/home/ubuntu/workspace/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37c07f1131e8_98024801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6c0440a98e1942e2f76830934de32391aee0d8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/contact.tpl',
      1 => 1513603194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c07f1131e8_98024801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6531823475a37c07f10b2d9_49291040', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_6531823475a37c07f10b2d9_49291040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6531823475a37c07f10b2d9_49291040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Contacter le support</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form name="contactForm" action="/index.php?module=contact&action=sendForm" method="post">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="img/logo.png" alt="logo storiot">
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="email" name="email" type="email">
                  <label for="email" data-error="erreur" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <select id="category" name="category">
                    <option value="" disabled selected>Choisir une catégorie</option>
                    <option value="information">Informations</option>
                    <option value="orders">Commandes</option>
                    <option value="account">Compte</option>
                  </select>
                  <label for="category">Catégorie</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="subject" name="subject" type="text">
                  <label for="subject" data-error="erreur" data-success="ok">Sujet</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <textarea id="message" class="materialize-textarea" name="message"></textarea>
                  <label for="message">Message</label>
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
 src="js/contact.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
