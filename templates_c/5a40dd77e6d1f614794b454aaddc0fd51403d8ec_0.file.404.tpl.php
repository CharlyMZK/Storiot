<?php
/* Smarty version 3.1.31, created on 2017-12-15 17:14:18
  from "/home/ubuntu/workspace/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3402eaa55c76_53428376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a40dd77e6d1f614794b454aaddc0fd51403d8ec' => 
    array (
      0 => '/home/ubuntu/workspace/templates/404.tpl',
      1 => 1513357558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3402eaa55c76_53428376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14245221035a3402eaa51b47_11687050', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_14245221035a3402eaa51b47_11687050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14245221035a3402eaa51b47_11687050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Page non trouvée</h4>
  </div>
</div>
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <div class="row">
              <div class="col offset-s1 s10 ">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                  <h5>Désolé la page n'a pas été trouvée..</h5>
              </div>
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
