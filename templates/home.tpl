{extends file="Layouts/layout.tpl"} {block "body"}
<div class="row">
    <div class="col s12">
      <div class="page-header">
        <h4 class="header" id="header-main">Nouveautés</h4>
      </div>
    </div>
  <div class="col s12 m12 item-row">
    {include file='Cards/itemCard.tpl' itemToDisplay=$newItems} 
  </div>
  <div class="more-row center">
    <a href="?module=catalogue" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-promo">Promotions</h4>
  </div>
  <div class="col s12 m12 item-row">
    {include file='Cards/itemCard.tpl' itemToDisplay=$promotedItems} 
  </div>
  <div class="more-row center">
    <a class="btn waves-effect waves-light brown-background" href="?module=catalogue" data-type="submit">Voir plus</a>
  </div>
  <div class="page-header">
    <h4 class="header" id="header-best">Best sellers</h4>
  </div>
  <div class="col s12 m12 item-row">
      {include file='Cards/itemCard.tpl' itemToDisplay=$bestReviewItems}
  </div>
  <div class="more-row center">
    <a href="?module=catalogue" class="btn waves-effect waves-light brown-background" data-type="submit">Voir plus</a>
  </div>
</div>
<script src="js/cart.js"></script>
<script src="js/home.js"></script>
{/block}
