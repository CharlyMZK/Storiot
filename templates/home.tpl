{extends file="Layouts/layout.tpl"} {block "body"}
<div class="row">
  <div class="col s12 m12 item-row">
    <div class="col s12">
      <div class="page-header">
        <h4 class="header" id="header-main">Nouveautés</h4>
      </div>
    </div>
    {foreach from=$newItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()} alt="{$item->getName()}">
          <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id="add-shopping-cart-{$item->getId()}" type="submit">
            <i class="material-icons" >add_shopping_cart</i>
          </button>
        </div>
        <div class="card-content">
          <span class="card-title">
            <a id="item-{$item->getId()}" href="/index.php?module=item&id={$item->getId()}">{$item->getName()}</a>
          </span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-promo">Promotions</h4>
  </div>
  <div class="col s12 m12 item-row">
    {foreach from=$promotedItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()} alt="{$item->getName()}">
          <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" type="submit"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title">
            <a id="item-{$item->getId()}" href="/index.php?module=item&id={$item->getId()}">{$item->getName()}</a>
          </span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span>
          </p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a class="btn waves-effect waves-light brown-background" href="?module=mainItem" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-best">Best sellers</h4>
  </div>
  <div class="col s12 m12 item-row">
    {foreach from=$bestReviewItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()} alt="{$item->getName()}">
          <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" type="submit">
            <i class="material-icons" >add_shopping_cart</i>
          </button>
        </div>
        <div class="card-content">
          <span class="card-title">
            <a id="item-{$item->getId()}" href="/index.php?module=item&id={$item->getId()}">{$item->getName()}</a>
          </span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
</div>
<script src="js/cart.js"></script>
<script src="js/home.js"></script>
{/block}
