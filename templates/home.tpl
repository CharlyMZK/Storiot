{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Nouveautés</h4>
  </div>
</div>
<div class="row">
  <div class="col s12 m12 item-row">
    {foreach from=$newItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()}>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item">{$item->getName()}</a></span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-promo">Promotions</h4>
  </div>
  <div class="col s12 m12 item-row">
    {foreach from=$promotedItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()}>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item">{$item->getName()}</a></span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-best">Best sellers</h4>
  </div>
  <div class="col s12 m12 item-row">
    {foreach from=$bestReviewItems item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
    <div class="col s4">
      <div class="card">
        <div class="card-image">
          <img src={$item->getImage()}>
          <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart"><i class="material-icons" >add_shopping_cart</i></button>
        </div>
        <div class="card-content">
          <span class="card-title"><a href="#"  name="item" id = "item">{$item->getName()}</a></span>
          <p>{$item->getDescription()}</p>
          <br/>
          <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
  <div class="more-row center">
    <a href="?module=mainItem" class="btn waves-effect waves-light brown-background" type="submit">Voir plus</a>
  </div>
</div>
</div>
<script type="text/javascript" src="js/cart.js"></script>
<script type="text/javascript" src="js/home.js"></script>
{/block}
