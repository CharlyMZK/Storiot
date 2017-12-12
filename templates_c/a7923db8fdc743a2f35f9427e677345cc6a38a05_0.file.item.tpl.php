<?php
/* Smarty version 3.1.31, created on 2017-12-11 15:10:38
  from "/home/ubuntu/workspace/templates/item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a2e9feecc7319_31677670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7923db8fdc743a2f35f9427e677345cc6a38a05' => 
    array (
      0 => '/home/ubuntu/workspace/templates/item.tpl',
      1 => 1512636322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2e9feecc7319_31677670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20887661095a2e9feecb7801_19063860', "body");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_20887661095a2e9feecb7801_19063860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20887661095a2e9feecb7801_19063860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col s12">
        <div class="page-header">
          <h4 class="header" id="header-main">Produit</h4>
        </div>
      </div>
      <div class="row hide-on-small-only hero-home">
        <h2>This is an item : <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
]</h2>
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
