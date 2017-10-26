<?php
/* Smarty version 3.1.31, created on 2017-10-26 13:12:40
  from "/home/ubuntu/workspace/templates/help.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1df485c20b3_54530941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e1422a9e629582d882d7262fce9237d4be3a60c' => 
    array (
      0 => '/home/ubuntu/workspace/templates/help.tpl',
      1 => 1509023557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1df485c20b3_54530941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36960925259f1df485be0a4_58738001', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_36960925259f1df485be0a4_58738001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_36960925259f1df485be0a4_58738001',
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
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
              </div>
              <h5>Qu'est ce qu'une FAQ</h5>
              <p>Cette page</p>
              <h5>Pensez vous que c'est magique ?</h5>
              <p>Oui !</p>
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
