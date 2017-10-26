<?php
/* Smarty version 3.1.31, created on 2017-10-26 14:03:01
  from "/home/ubuntu/workspace/templates/Layouts/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1eb15dab033_45357889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4e3a378d48f4f46de07b85d47f354a3bc2ae7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/navbar.tpl',
      1 => 1509026572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1eb15dab033_45357889 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">IT</a></li>
  <li><a href="#!">Robots</a></li>
  <li class="divider"></li>
  <li><a href="#!">Drones</a></li>
</ul>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="?page=AdditionnalInformations">AdditionnalInformations</a></li>
  <li><a href="?page=cart">Cart</a></li>
  <li><a href="?page=confirmation">Confirmation</a></li>
  <li><a href="?page=contact">Contact</a></li>
  <li><a href="?page=help">Help</a></li>
  <li><a href="?page=item">Item</a></li>
  <li><a href="?page=mainItem">MainItem</a></li>
  <li><a href="?page=manageAccount">ManageAccount</a></li>
  <li><a href="?page=manageOrders">ManageOrders</a></li>
  <li><a href="?page=managePaymentInformations">ManagePayementInformations</a></li>
  <li><a href="?page=order">Order</a></li>
  <li><a href="?page=pay">Pay</a></li>
  <li><a href="?page=paymentInformations">PaymentInformations</a></li>
  <li><a href="?page=recoverPassword">RecoverPassword</a></li>
  <li><a href="?page=signIn">SignIn</a></li>
  <li><a href="?page=signUp">SignUp</a></li>
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
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dummies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
</ul><?php }
}
