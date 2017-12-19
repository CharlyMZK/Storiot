{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Nos articles</h4>
    </div>
  </div>
</header>
<div class="row hide-on-small-only hero-home">
  <div class="row">
    <div class="col s12 m12 item-row">
      {foreach from=$items item=item}
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src={$item->getImage()} alt="{$item->getName()}">
            <button class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id={$item->getId()} type="submit"><i class="material-icons" >add_shopping_cart</i></button>
          </div>
          <div class="card-content">
            <span class="card-title"><a id="item-{$item->getId()}" href="/index.php?module=item&id={$item->getId()}">{$item->getName()}</a></span>
            <p>{$item->getDescription()}</p>
            <br/>
            <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
          </div>
        </div>
      </div>
      {/foreach}
    </div>
  </div>
</div>
<script src="js/cart.js"></script>
{/block}
