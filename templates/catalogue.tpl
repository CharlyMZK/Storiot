{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Nos articles</h4>
    </div>
  </div>
</header>
<div class="row hero-home">
  <div class="row">
    <div class="col s12 m12 item-row">
      {include file='Cards/itemCard.tpl' itemToDisplay=$items}
    </div>
  </div>
</div>
<script src="js/cart.js"></script>
{/block}
