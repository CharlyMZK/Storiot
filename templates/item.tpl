{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Fiche produit</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <div class="row">
            <div class="card-panel center">
              <img class="responsive-img" src={$item->getImage()} alt="{$item->getName()}">
            </div>
            <div class="card-panel center-align">
              <h5>{$item->getName()}</h5>
              <p>Description : {$item->getDescription()}</p>
              <p>Taille : {$item->getSize()} cm</p>
              <p>Poids : {$item->getWeight()} g</p>
              <p>Prix : {$item->getPrice()} €</p>
              <button class="btn waves-effect waves-light addToCart" id="add-shopping-cart-{$item->getId()}" type="submit">Ajouter au panier</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/cart.js"></script>
{/block}
