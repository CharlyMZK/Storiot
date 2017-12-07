<?php
/* Smarty version 3.1.31, created on 2017-12-07 15:08:37
  from "/home/ubuntu/workspace/templates/additionnalInformation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2959756c9d49_86584978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140e529e74aa01c98233736cd5b1150c9c0a26b3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/additionnalInformation.tpl',
      1 => 1512636133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2959756c9d49_86584978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4000657385a2959756c32e6_03265355', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_4000657385a2959756c32e6_03265355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4000657385a2959756c32e6_03265355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Adresse de livraison</h4>
  </div>
</div>
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
                  <input class="validate" id="zipCode" type="text">
                  <label for="zipCode" data-error="erreur" data-success="ok">Code postal</label>
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
