<?php
/* Smarty version 3.1.31, created on 2017-10-12 06:53:59
  from "/home/ubuntu/workspace/templates/item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df1187bc8b46_57679676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7923db8fdc743a2f35f9427e677345cc6a38a05' => 
    array (
      0 => '/home/ubuntu/workspace/templates/item.tpl',
      1 => 1507715289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df1187bc8b46_57679676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40467359259df1187bc6f17_20284833', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_40467359259df1187bc6f17_20284833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_40467359259df1187bc6f17_20284833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Tablet and desktop -->
      <div class="row hide-on-small-only hero-home">
        <h2>This is an item</h2>
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
