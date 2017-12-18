<?php
/* Smarty version 3.1.31, created on 2017-12-18 09:33:03
  from "/home/ubuntu/workspace/templates/Layouts/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a378b4f9c7f82_96865070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4e3a378d48f4f46de07b85d47f354a3bc2ae7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/navbar.tpl',
      1 => 1513589504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a378b4f9c7f82_96865070 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"></a> <a href="../" class="navbar-brand"><i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;STORIOT</a>
    <ul class="hide-on-med-and-down right">
      <li>
        <div class="center">
          <div class="col s12 ">
            <div id="topbarsearch">
              <div class="input-field col s6 s12">
                <form id="searchForm" action="/index.php?module=mainItem&action=sendForm" method="post">
                  <i class="material-icons prefix">search</i>
                  <input class="autocomplete red-text search" name="search" type="text" placeholder="search" <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>value=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>>
                </form>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li><a href="index.php">Accueil</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownCategories">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="?module=mainItem">Voir articles</a></li>
      <li><a href="?module=cart">Panier</a></li>
      <li><a href="?module=contact">Contact</a></li>
      <?php if ($_SESSION['userId'] == 0) {?>
      <li><a href="?module=signUp">Inscription</a></li>
      <li><a href="?module=signIn">Connexion</a></li>
      <?php } else { ?>
      <li><a id="manageAccount" href="?module=manageAccount"><?php echo $_SESSION['userFirstName'];?>
</a></li>
      <li><a href="?module=home&action=signOut">Deconnexion</a></li>
      <?php }?>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownDummies">Dummies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<ul id="dropdownCategories" class="dropdown-content">
  <li><a href="?module=mainItem">Toutes</a></li>
  <li><a href="?module=mainItem&action=it">It</a></li>
  <li><a href="?module=mainItem&action=robot">Robot</a></li>
  <li><a href="?module=mainItem&action=drone">Drone</a></li>
  <li class="divider"></li>
</ul>
<ul id="dropdownDummies" class="dropdown-content">
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
</ul><?php }
}
