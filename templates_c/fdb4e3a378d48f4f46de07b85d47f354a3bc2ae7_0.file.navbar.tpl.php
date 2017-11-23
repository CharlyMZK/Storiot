<?php
/* Smarty version 3.1.31, created on 2017-11-10 10:08:11
  from "/home/ubuntu/workspace/templates/Layouts/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a057a8b355dc9_93522197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4e3a378d48f4f46de07b85d47f354a3bc2ae7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/navbar.tpl',
      1 => 1510308489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a057a8b355dc9_93522197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">IT</a></li>
  <li><a href="#!">Robots</a></li>
  <li class="divider"></li>
  <li><a href="#!">Drones</a></li>
</ul>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="?module=additionnalInformation">AdditionnalInformation</a></li>
  <li><a href="?module=cart">Cart</a></li>
  <li><a href="?module=confirmation">Confirmation</a></li>
  <li><a href="?module=contact">Contact</a></li>
  <li><a href="?module=help">Help</a></li>
  <li><a href="?module=item">Item</a></li>
  <li><a href="?module=mainItem">MainItem</a></li>
  <li><a href="?module=manageAccount">ManageAccount</a></li>
  <li><a href="?module=manageOrders">ManageOrders</a></li>
  <li><a href="?module=paymentInformation">ManagePayementInformation</a></li>
  <li><a href="?module=order">Order</a></li>
  <li><a href="?module=pay">Pay</a></li>
  <li><a href="?module=paymentInformation">PaymentInformation</a></li>
  <li><a href="?module=recoverPassword">RecoverPassword</a></li>
  <li><a href="?module=signIn">SignIn</a></li>
  <li><a href="?module=signUp">SignUp</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"> <a href="../" class="navbar-brand"><i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;STORIOT</a></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Accueil</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="?module=mainItem">Voir articles</a></li>
      <li><a href="?module=cart">Panier</a></li>
      <li><a href="?module=contact">Contact</a></li>
      <li><a href="?module=signUp">Inscription</a></li>
      <li><a href="?module=signIn">Connexion</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dummies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
</ul><?php }
}
