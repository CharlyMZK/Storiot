<?php
/* Smarty version 3.1.31, created on 2017-10-12 06:53:52
  from "/home/ubuntu/workspace/templates/confirmation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df1180d853b4_69435700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a52cb6fdff1e0b6a0deeadfce9707b42144a8438' => 
    array (
      0 => '/home/ubuntu/workspace/templates/confirmation.tpl',
      1 => 1507715264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df1180d853b4_69435700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50865026359df1180d83427_42255995', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_50865026359df1180d83427_42255995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_50865026359df1180d83427_42255995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Tablet and desktop -->
      <div class="row hide-on-small-only hero-home">
        <h2>Confirmation</h2>
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
