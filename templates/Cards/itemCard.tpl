 {foreach from=$itemToDisplay item=item} {if $smarty.foreach.item.index == 10} {break} {/if}
<div class="col m4 s12">
  <div class="card">
    <div class="card-image">
      <img src={$item->getImage()} alt="{$item->getName()}">
      <button onclick="addToCart({$item->getId()})" class="btn-floating button-floating-2 waves-effect waves-light deep-purple darken-3 addToCart" id="add-shopping-cart-{$item->getId()}" type="submit">
            <i class="material-icons" >add_shopping_cart</i>
          </button>
    </div>
    <div class="card-content">
      <span class="card-title">
            <a id="item-{$item->getId()}" href="/item/get/{$item->getId()}">{$item->getName()}</a>
          </span>
      <p>{$item->getDescription()}</p>
      <br/>
      <p><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><span class="price">{$item->getPrice()} €</span></p>
    </div>
  </div>
</div>
{/foreach}