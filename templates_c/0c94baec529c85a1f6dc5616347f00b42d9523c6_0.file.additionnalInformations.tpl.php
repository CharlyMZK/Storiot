<?php
/* Smarty version 3.1.31, created on 2017-10-26 13:36:53
  from "/home/ubuntu/workspace/templates/additionnalInformations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1e4f5633c12_55228677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c94baec529c85a1f6dc5616347f00b42d9523c6' => 
    array (
      0 => '/home/ubuntu/workspace/templates/additionnalInformations.tpl',
      1 => 1509025004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1e4f5633c12_55228677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13297883059f1e4f5628b27_29239934', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_13297883059f1e4f5628b27_29239934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13297883059f1e4f5628b27_29239934',
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
                  <input class="validate" id="address" type="text">
                  <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="zip" type="text">
                  <label for="zip" data-error="erreur" data-success="ok">Code postal</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="city" type="text">
                  <label for="city" data-error="erreur" data-success="ok">Ville</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="phone" type="text">
                  <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Suivant</button>
                  <button class="btn waves-effect red" type="reset">Annuler</button>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "body"} */
}
