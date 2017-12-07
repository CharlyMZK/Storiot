{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Panier</h4>
  </div>
</div>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <table class="striped highlight centered responsive-table">
            <thead>
              <tr>
                <th>Article</th>
                <th>Prix</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Quantité</th>
                <th>Supprimer</th>
                <th/>
              </tr>
            </thead>
            <tbody class="cart" id="paymentCardTable">
              {foreach from=$itemsInCart item=item}
              <tr>
                <td>
                  <a href="#">{$item->getItem()->getName()}</a>
                </td>
                <td>
                  {$item->getItem()->getPrice()} €
                </td>
                <td>
                  {$item->getItem()->getWeight()} g.
                </td>
                <td>
                  {$item->getItem()->getSize()} cm
                </td>
                <td>
                  <input id="{$item->getItem()->getId()}" name="{$item->getItem()->getId()}" type="number" value="{$item->getQuantity()}" class="input-quantity item-{$item->getItem()->getId()}-quantity">
                </td>
                <td>
                  <a id="{$item->getItem()->getId()}" name="{$item->getItem()->getId()}" class="item-{$item->getItem()->getId()} remove-item btn-floating waves-effect waves-light red">
                      <i class="material-icons">delete</i>
                    </a>
                </td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          <br/>
          <div class="center">
            <button class="btn waves-effect waves-light" type="submit">Commander</button>
            <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/cart.js"></script>
{/block}