<?php
/* Smarty version 3.1.31, created on 2017-10-11 09:08:29
  from "/home/ubuntu/workspace/templates/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59dddf8d61a348_33783151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6508d56026103b4240581be354b92a99ac92cd95' => 
    array (
      0 => '/home/ubuntu/workspace/templates/navbar.tpl',
      1 => 1507712901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dddf8d61a348_33783151 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">IT</a></li>
  <li><a href="#!">Robots</a></li>
  <li class="divider"></li>
  <li><a href="#!">Drones</a></li>
</ul>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> <a href="../" class="navbar-brand"><i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;STORIOT</a></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Accueil</a></li>
         <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="?page=catalogue">Voir articles</a></li>
        <li><a href="?page=cart">Panier</a></li>
        <li><a href="?page=contact">Contact</a></li>
        <li><a href="?page=signUp">Inscription</a></li>
        <li><a href="?page=signIn">Connexion</a></li>
      </ul>
    </div>
  </nav>
</ul><?php }
}
