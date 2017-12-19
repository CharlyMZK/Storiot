<?php
/* Smarty version 3.1.31, created on 2017-12-19 19:42:56
  from "/home/ubuntu/workspace/templates/Layouts/navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a396bc019be29_59323611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb4e3a378d48f4f46de07b85d47f354a3bc2ae7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/Layouts/navbar.tpl',
      1 => 1513712574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a396bc019be29_59323611 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
  <div class="nav-wrapper">
    <a class="button-collapse" data-activates="mobile-demo" href="#"><i class="material-icons">menu</i></a>
    <a class="brand-logo" href="#"></a> <a href="../" class="navbar-brand"><i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;STORIOT</a>
    <ul class="hide-on-med-and-down right" id="nav-mobile">
      <li>
        <div class="center">
          <div class="col s12 ">
            <div class="input-field col s6 s12">
              <form id="searchForm" action="/index.php?module=catalogue&action=sendForm" method="post">
                <i class="material-icons prefix">search</i>
                <input class="autocomplete red-text search" name="search" type="text" placeholder="rechercher" <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" <?php }?>>
              </form>
            </div>
          </div>
        </div>
      </li>
      <li><a href="/home.html">Accueil</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownCategories">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/catalogue.html">Voir articles</a></li>
      <li><a href="/cart.html">Panier</a></li>
      <li><a href="/contact.html">Contact</a></li>
      <?php if ($_SESSION['userId'] == 0) {?>
      <li><a href="/signUp.html">Inscription</a></li>
      <li><a href="/signIn.html">Connexion</a></li>
      <?php } else { ?>
      <li><a href="/order.html">Commandes</a></li>
      <li><a id="manageAccount" href="/manageAccount.html"><?php echo $_SESSION['userFirstName'];?>
</a></li>
      <li><a href="/home.html/signOut">Deconnexion</a></li>
      <?php }?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li>
        <div class="center">
          <div class="col s12 ">
            <div class="input-field col s6 s12">
              <form id="searchFormMobile" action="/index.php?module=catalogue&action=sendForm" method="post">
                <i class="material-icons prefix">search</i>
                <input class="autocomplete red-text search" name="search" type="text" placeholder="rechercher" <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" <?php }?>>
              </form>
            </div>
          </div>
        </div>
      </li>
      <li><a href="index.php">Accueil</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownCategories">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="?module=catalogue">Voir articles</a></li>
      <li><a href="?module=cart">Panier</a></li>
      <li><a href="?module=contact">Contact</a></li>
      <?php if ($_SESSION['userId'] == 0) {?>
      <li><a href="?module=signUp">Inscription</a></li>
      <li><a href="?module=signIn">Connexion</a></li>
      <?php } else { ?>
      <li><a href="index.php?module=order">Commandes</a></li>
      <li><a id="manageAccount" href="?module=manageAccount"><?php echo $_SESSION['userFirstName'];?>
</a></li>
      <li><a href="?module=home&action=signOut">Deconnexion</a></li>
      <?php }?>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownDummies">Dummies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<ul id="dropdownCategories" class="dropdown-content">
  <li><a href="?module=catalogue">Toutes</a></li>
  <li><a href="?module=catalogue&action=it">It</a></li>
  <li><a href="?module=catalogue&action=robot">Robot</a></li>
  <li><a href="?module=catalogue&action=drone">Drone</a></li>
  <li class="divider"></li>
</ul><?php }
}
