{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Panier</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      {if ($itemsInCart|@count) > 0}
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form action="?module=pay&action=chooseCreditCard" method="POST">
            <table class="striped highlight centered responsive-table">
              <thead>
                <tr>
                  <th>Article</th>
                  <th>Taille</th>
                  <th>Poids</th>
                  <th>Prix</th>
                  <th>Quantité</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              
              <tbody class="cart" id="paymentCardTable">
                {foreach from=$itemsInCart item=item}
                <tr>
                  <td>
                    <a href="#">{$item->getItem()->getName()}</a>
                  </td>
                  <td>
                    {$item->getItem()->getSize()} cm
                  </td>
                  <td>
                    {$item->getItem()->getWeight()} g
                  </td>
                  <td>
                    {$item->getItem()->getPrice()} €
                  </td>
                  <td>
                    <input class="input-quantity item-{$item->getItem()->getId()}-quantity" id="{$item->getItem()->getId()}" type="number" value="{$item->getQuantity()}">
                  </td>
                  <td>
                    <a class="item-{$item->getItem()->getId()} remove-item btn-floating waves-effect waves-light red" id="remove-{$item->getItem()->getId()}" >
                        <i class="material-icons">delete</i>
                      </a>
                  </td>
                </tr>
                {/foreach}
                <tr>
                  <td colspan=5></td>
                  <td>
                    <p class="recap">Total HT : {$noTaxAmount} €<br/> Total TTC : {$amountWithTax} €</p>
                  </td>
                </tr>
              </tbody>
             
            </table>

            <br/> {if ($itemsInCart|@count) > 0}
            <div class="center">
              <button class="btn waves-effect waves-light" type="submit">Commander</button>
              <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
            </div>
            {/if}
          </form>
        </div>
         {/if}
      </div>
    </div>
  </div>
</div>
<script src="js/cart.js"></script>
{/block}
