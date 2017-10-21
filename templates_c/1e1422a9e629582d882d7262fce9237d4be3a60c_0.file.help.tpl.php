<?php
/* Smarty version 3.1.31, created on 2017-10-12 06:53:57
  from "/home/ubuntu/workspace/templates/help.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df11853237a0_86963811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e1422a9e629582d882d7262fce9237d4be3a60c' => 
    array (
      0 => '/home/ubuntu/workspace/templates/help.tpl',
      1 => 1507715279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df11853237a0_86963811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177087328459df11853210d2_17703329', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_177087328459df11853210d2_17703329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_177087328459df11853210d2_17703329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Tablet and desktop -->
      <div class="row hide-on-small-only hero-home">
        <h2>Help</h2>
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
