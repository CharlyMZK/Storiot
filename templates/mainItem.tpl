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
            <img src={$item->getImage()}>
            <button type="submit" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id={$item->getId()} ><i class="material-icons" >add_shopping_cart</i></button>
            <!-- <a class="btn-floating button-floating-1 waves-effect waves-light deep-purple darken-3"><i class="material-icons" id="addToCard">add_shopping_cart</i></a> -->
            <!--<a class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3"><i class="material-icons">trending_up</i></a>-->
          </div>
          <div class="card-content">
            <span class="card-title"><a href="#"  name="{$item->getId()}" class = "item-{$item->getId()}">{$item->getName()}</a></span>
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
