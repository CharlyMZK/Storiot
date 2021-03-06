<?php
/* Smarty version 3.1.31, created on 2017-12-20 12:28:57
  from "/home/ubuntu/workspace/templates/confirmSignUp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a3a5789af5a34_00591814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42485f4b7dfe80ea0bbd76b9a57a14cd7644a70a' => 
    array (
      0 => '/home/ubuntu/workspace/templates/confirmSignUp.tpl',
      1 => 1513772839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3a5789af5a34_00591814 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ubuntu/workspace/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3432834845a3a5789ad47f0_22419859', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/layout.tpl");
}
/* {block "body"} */
class Block_3432834845a3a5789ad47f0_22419859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3432834845a3a5789ad47f0_22419859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Confirmation d'inscription</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <div class="row">
            <div class="col offset-s1 s10">
              <img class="profile-img" src="img/logo.png" alt="logo storiot">
            </div>
            <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <div class="card-panel red">
                  <p class="center-align white-text"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</p>
                </div>
              </div>
            </div>
            <?php } else { ?>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Bonjour <?php echo $_smarty_tpl->tpl_vars['user']->value->getGender() == 'm' ? ('Monsieur') : ('Madame');?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p> Nous validons votre inscription avec les données saisies suivantes :</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Email : <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Mot de passe (haché) : <?php echo $_smarty_tpl->tpl_vars['user']->value->getPassword();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Date de naissance : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->getBirthDate(),"%d/%m/%Y");?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Adresse : <?php echo $_smarty_tpl->tpl_vars['user']->value->getAddress();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['user']->value->getZipCode();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Ville : <?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Téléphone : <?php echo $_smarty_tpl->tpl_vars['user']->value->getPhone();?>
</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <div class="center">
                  <button class="btn waves-effect waves-light" id="ok">Ok</button>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="js/confirmSignUp.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
