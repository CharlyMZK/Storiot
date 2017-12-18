{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
    <div class="page-header">
        <h4 class="header" id="header-main">Paiement</h4>
    </div>
</div>
<form id="chooseCreditCard" action="/index.php?module=pay&action=pay" method="post">
    {if ($creditCards|@count) > 0}
    <table class="highlight centered responsive-table">
        <thead>
            <tr>
                <th>Numero</th>
                <th colspan="3">Expiration</th>
                <th>Titulaire</th>
                <th>Choix</th>
                <th/>
            </tr>
        </thead>
        <tbody id="paymentCardTable">
            {foreach from=$creditCards item=creditCard name="creditCards"}
            <tr>
                <td>
                    <p>{$creditCard->getReference()}</p>

                </td>
                <td colspan="3">
                    <p>{$creditCard->getExpireMonth()}/{$creditCard->getExpireYear()}</p>

                </td>
                <td>
                    <p>{$creditCard->getHolder()}</p>
                </td>
                <td>
                    <p>
                        {if $smarty.foreach.creditCards.index == 0 }
                        <input class="with-gap" id="card{$creditCard->getId()}" name="creditCard" type="radio" value="{$creditCard->getId()}" checked/> {else}
                        <input class="with-gap" id="card{$creditCard->getId()}" name="creditCard" type="radio" value="{$creditCard->getId()}" /> {/if}
                        <label for="card{$creditCard->getId()}">{$creditCard->getId()}</label>
                    </p>
                </td>
            </tr>
            {/foreach}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn waves-effect waves-light" id="submit" type="submit">Lancer la commande</button></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</form>
{else}
<div class="row hide-on-small-only hero-home">
    <div class="col m10 offset-m1 s12 l10 offset-l1">
        <div class="row">
            <div class="col s11 m11">
                <div class="card blue-grey darken-1">
                    <div class="card-content black-text">
                        <div class="row">
                            <div class="col offset-s1 s10 ">
                                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="logo storiot">
                                <div class="faq">
                                    <h5>Vous n'avez aucune carte de crédit, veuillez en ajouter sur votre profil</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{/if}
<script src="js/pay.js"></script>
{/block}
