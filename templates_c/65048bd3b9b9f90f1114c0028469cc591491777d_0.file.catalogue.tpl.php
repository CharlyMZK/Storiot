<?php
/* Smarty version 3.1.31, created on 2017-10-10 12:59:54
  from "/home/ubuntu/workspace/templates/catalogue.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59dcc44a9016e2_80701238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65048bd3b9b9f90f1114c0028469cc591491777d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/catalogue.tpl',
      1 => 1507640389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_59dcc44a9016e2_80701238 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
 <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <section id="splash-blue">


    <div class="container">

      <div class="col s12">
        <div class="page-header">
          <h4 id="header">Catalogue</h4>
        </div>
      </div>

      
        </div>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/materialize.min.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
