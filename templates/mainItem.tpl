{extends file="Layouts/layout.tpl"} {block "body"}
<!-- Tablet and desktop -->
<div class="row hide-on-small-only hero-home">
  <h2>Main item page</h2>
  
 
  <div class="row">
    <div class="col s12 m12 item-row">
      {foreach from=$items item=item}
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="https://static.pexels.com/photos/529599/pexels-photo-529599.jpeg">
              <span class="card-title">{$item->getName()}</span>
            </div>
            <div class="card-content">
              <p>{$item->getDescription()}</p>
              <p> Price: {$item->getPrice()} €</p>
              <p> Weight: {$item->getWeight()}</p>
              <p> Size: {$item->getSize()}</p>
            </div>
          </div>
        </div>
       {/foreach}
    </div>


  </div>
</div>



</div>
{/block}
