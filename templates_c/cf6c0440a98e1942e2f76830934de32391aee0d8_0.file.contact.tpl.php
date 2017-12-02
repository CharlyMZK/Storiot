<?php
/* Smarty version 3.1.31, created on 2017-11-26 12:39:32
  from "/home/ubuntu/workspace/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a1ab604d51eb1_27425709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6c0440a98e1942e2f76830934de32391aee0d8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/contact.tpl',
      1 => 1511508669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ab604d51eb1_27425709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20830752435a1ab604d4c4e8_81242812', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_20830752435a1ab604d4c4e8_81242812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20830752435a1ab604d4c4e8_81242812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="contactForm">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="email" type="email">
                  <label for="email" data-error="erreur" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="category" type="text">
                  <label for="category" data-error="erreur" data-success="ok">Catégorie</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <a class='dropdown-button btn' href='#' data-activates='subject'>Sujet</a>
                  <ul class='dropdown-content' id='subject'>
                    <li><a href="#!">Painte</a></li>
                    <li><a href="#!">Mauvais objet</a></li>
                    <li><a href="#!">retour</a></li>
                  </ul>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <textarea id="message" class="materialize-textarea"></textarea>
                  <label for="message">Textarea</label>
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
<?php
}
}
/* {/block "body"} */
}
