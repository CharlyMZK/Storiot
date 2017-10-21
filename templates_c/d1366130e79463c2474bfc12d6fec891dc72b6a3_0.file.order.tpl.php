<?php
/* Smarty version 3.1.31, created on 2017-10-12 06:55:10
  from "/home/ubuntu/workspace/templates/order.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df11cec0e455_33637775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1366130e79463c2474bfc12d6fec891dc72b6a3' => 
    array (
      0 => '/home/ubuntu/workspace/templates/order.tpl',
      1 => 1507715486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df11cec0e455_33637775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20653864359df11cec0c5b1_41168475', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_20653864359df11cec0c5b1_41168475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20653864359df11cec0c5b1_41168475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Tablet and desktop -->
      <div class="row hide-on-small-only hero-home">
        <h2>Order page</h2>
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
