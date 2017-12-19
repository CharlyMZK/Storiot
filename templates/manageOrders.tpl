{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Gestion des commandes</h4>
    </div>
  </div>
</header>
{foreach from=$orders item=order}
<div class="page-header">
  <h4 class="header" id="header-main">Commande du {$order->getSendDate()|date_format:"%d/%m/%Y"}</->
  </h4>
</div>
<div class="col m12 offset-m1 s12 l12 offset-l1">
  <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <table class="striped highlight centered responsive-table">
            <thead>
              <tr>
                <th>Article</th>
                <th>Taille</th>
                <th>Poids</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th/>
              </tr>
            </thead>
            <tbody class="cart" id="packageTable">
              {foreach from=$order->getItemInPackages() item=item}
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
                  {$item->getQuantity()}
                </td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          <br/>
          <div class="center">
            <button class="btn waves-effect waves-light" type="submit">Telecharger la facture</button>
            <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Nous contacter</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{/foreach}
<script src="js/manageAccount.js"></script>
{/block}
