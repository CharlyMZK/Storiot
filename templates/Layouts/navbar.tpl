<nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"> <a href="../" class="navbar-brand"><i class="fa fa-rocket" aria-hidden="true"></i>&nbsp;STORIOT</a></a>
    <ul class="hide-on-med-and-down right">
      <li>
        <div class="center">
          <div class="col s12 ">
            <div id="topbarsearch">
              <div class="input-field col s6 s12">
                <form id="signInForm" action="/index.php?module=mainItem&action=sendForm" method="post">
                  <i class="material-icons prefix">search</i>
                  <input class="autocomplete red-text search" name="search" type="text" placeholder="search">
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
      {if $smarty.session.userId == 0}
      <li><a href="?module=signUp">Inscription</a></li>
      <li><a href="?module=signIn">Connexion</a></li>
      {else}
      <li><a id="manageAccount" href="?module=manageAccount">{$smarty.session.userFirstName}</a></li>
      <li><a href="?module=home&action=signOut">Deconnexion</a></li>
      {/if}

      <li><a class="dropdown-button" href="#!" data-activates="dropdownDummies">Dummies<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
</ul>

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
</ul>