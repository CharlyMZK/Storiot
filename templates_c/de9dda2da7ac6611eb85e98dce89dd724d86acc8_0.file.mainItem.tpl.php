<?php
/* Smarty version 3.1.31, created on 2017-10-26 14:57:30
  from "/home/ubuntu/workspace/templates/mainItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1f7da461bb3_19085121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9dda2da7ac6611eb85e98dce89dd724d86acc8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/mainItem.tpl',
      1 => 1509029388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1f7da461bb3_19085121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174391902759f1f7da4502f6_51814572', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_174391902759f1f7da4502f6_51814572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174391902759f1f7da4502f6_51814572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Tablet and desktop -->
<div class="row hide-on-small-only hero-home">
  <h2>Main item page</h2>
  
 
  <div class="row">
    <div class="col s12 m12 item-row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="https://static.pexels.com/photos/529599/pexels-photo-529599.jpeg">
              <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
</span>
            </div>
            <div class="card-content">
              <p><?php echo $_smarty_tpl->tpl_vars['item']->value->getDescription();?>
</p>
              <p> Price: <?php echo $_smarty_tpl->tpl_vars['item']->value->getPrice();?>
 €</p>
              <p> Weight: <?php echo $_smarty_tpl->tpl_vars['item']->value->getWeight();?>
</p>
              <p> Size: <?php echo $_smarty_tpl->tpl_vars['item']->value->getSize();?>
</p>
            </div>
          </div>
        </div>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>


  </div>
</div>



</div>
<?php
}
}
/* {/block "body"} */
}
