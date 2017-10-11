<?php
/* Smarty version 3.1.31, created on 2017-10-11 09:42:31
  from "/home/ubuntu/workspace/templates/Layouts/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59dde787afaa15_27321435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4e3a378d48f4f46de07b85d47f354a3bc2ae7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/navbar.tpl',
      1 => 1507712901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dde787afaa15_27321435 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><a href="?page=mainItem">Voir articles</a></li>
        <li><a href="?page=cart">Panier</a></li>
        <li><a href="?page=contact">Contact</a></li>
        <li><a href="?page=signUp">Inscription</a></li>
        <li><a href="?page=signIn">Connexion</a></li>
      </ul>
    </div>
  </nav>
</ul><?php }
}
