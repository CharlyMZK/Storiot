<?php
/* Smarty version 3.1.31, created on 2017-12-18 13:20:46
  from "/home/ubuntu/workspace/templates/order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a37c0aeee5ca5_68162619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1366130e79463c2474bfc12d6fec891dc72b6a3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/order.tpl',
      1 => 1513586606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37c0aeee5ca5_68162619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14757643915a37c0aeee32e1_78727759', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_14757643915a37c0aeee32e1_78727759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14757643915a37c0aeee32e1_78727759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Commander</h4>
    </div>
  </div>
</header>
<div class="row hide-on-small-only hero-home">
  <h2>Order page</h2>
</div>
</div>
<?php
}
}
/* {/block "body"} */
}
