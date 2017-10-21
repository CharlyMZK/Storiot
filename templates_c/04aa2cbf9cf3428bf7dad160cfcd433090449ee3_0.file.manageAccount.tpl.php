<?php
/* Smarty version 3.1.31, created on 2017-10-12 13:18:30
  from "/home/ubuntu/workspace/templates/manageAccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df6ba6b60372_53358732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04aa2cbf9cf3428bf7dad160cfcd433090449ee3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/manageAccount.tpl',
      1 => 1507814300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df6ba6b60372_53358732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151475868359df6ba6b5c153_22741677', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_151475868359df6ba6b5c153_22741677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_151475868359df6ba6b5c153_22741677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card dark">
  <div class="card-tabs indicator blue">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#informations">Informations</a></li>
      <li class="tab"><a href="#test5">Paiement</a></li>
      <li class="tab"><a href="#test6">Adresse</a></li>
      <li class="tab"><a href="#test6">Test 3</a></li>
    </ul>
  </div>
  <div class="card-content">
    <div id="informations">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input value="Bouchon" id="last_name" type="text" class="validate">
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input value="Jean" id="first_name" type="text" class="validate">
          <label for="first_name">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10" style="color:grey;">
        &nbsp; Sexe :
        <p>
          <input name="sex_group" type="radio" id="sex_man" />
          <label for="sex_man">Homme</label>
        </p>
        <p>
          <input name="sex_group" type="radio" id="sex_female" />
          <label for="sex_female">Femme</label>
        </p>
      </div>
    </div>
    <div id="test5">Test 2</div>
    <div id="test6">Test 3</div>
  </div>
</div>
</div>
<?php
}
}
/* {/block "body"} */
}
