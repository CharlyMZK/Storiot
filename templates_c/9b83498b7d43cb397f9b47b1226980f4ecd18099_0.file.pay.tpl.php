<?php
/* Smarty version 3.1.31, created on 2017-12-12 20:25:57
  from "/home/ubuntu/workspace/templates/pay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a303b55672c62_50169139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b83498b7d43cb397f9b47b1226980f4ecd18099' => 
    array (
      0 => '/home/ubuntu/workspace/templates/pay.tpl',
      1 => 1513110354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a303b55672c62_50169139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6254827735a303b5566c609_02497351', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_6254827735a303b5566c609_02497351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6254827735a303b5566c609_02497351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Paiement</h4>
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
                <div class="payment">
                  <h5>Nous procedons au paiement..</h5>
                  <div class="row">
                    <div class="col offset-s5 s1">
                      <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-blue-only">
                          <div class="circle-clipper left">
                            <div class="circle"></div>
                          </div>
                          <div class="gap-patch">
                            <div class="circle"></div>
                          </div>
                          <div class="circle-clipper right">
                            <div class="circle"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row"><i class="col offset-s5 s1 orderfinished material-icons">thumb_up</i></div>
                  <br/>
                  <div class="row">
                    <div class="bill-buttons"><a class="btn waves-effect waves-light" download="/bill.txt">Télécharger la facture</a>
                      <a href="index.php?module=home" class="btn waves-effect waves-dark white black-text">Retour</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="js/pay.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
