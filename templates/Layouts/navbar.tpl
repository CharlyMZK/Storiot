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
                <input class="autocomplete red-text search" name="search" type="text" placeholder="rechercher" {if $search}value="{$search}" {/if}>
              </form>
            </div>
          </div>
        </div>
      </li>
      <li><a href="/home">Accueil</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdownCategories">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="/catalogue">Voir articles</a></li>
      <li><a href="/cart">Panier</a></li>
      <li><a href="/contact">Contact</a></li>
      {if $smarty.session.userId == 0}
      <li><a href="/signUp">Inscription</a></li>
      <li><a href="/signIn">Connexion</a></li>
      {else}
      <li><a href="/order">Commandes</a></li>
      <li><a id="manageAccount" href="/manageAccount">{$smarty.session.userFirstName}</a></li>
      <li><a href="/home/signOut">Deconnexion</a></li>
      {/if}
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li>
        <div class="center">
          <div class="col s12 ">
            <div class="input-field col s6 s12">
              <form id="searchFormMobile" action="/index.php?module=catalogue&action=sendForm" method="post">
                <i class="material-icons prefix">search</i>
                <input class="autocomplete red-text search" name="search" type="text" placeholder="rechercher" {if $search}value="{$search}" {/if}>
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
      {if $smarty.session.userId == 0}
      <li><a href="?module=signUp">Inscription</a></li>
      <li><a href="?module=signIn">Connexion</a></li>
      {else}
      <li><a href="index.php?module=order">Commandes</a></li>
      <li><a id="manageAccount" href="?module=manageAccount">{$smarty.session.userFirstName}</a></li>
      <li><a href="?module=home&action=signOut">Deconnexion</a></li>
      {/if}
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
</ul>