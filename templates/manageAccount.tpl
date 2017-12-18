{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Gestion du compte</h4>
  </div>
</div>
{if $user}
<div class="card dark">
  <div class="card-tabs indicator blue">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#informationCard">Informations</a></li>
      <li class="tab"><a href="#passwordCard">Mot de passe</a></li>
      <li class="tab"><a href="#addressCard">Adresse</a></li>
      <li class="tab"><a href="#paymentCard">Paiement</a></li>
    </ul>
  </div>
  <div class="card-content">
    <div id="informationCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="email" type="email" value={$user->getEmail()}>
          <label for="email data-error=" erreur="" data-success="ok">Email</label>
        </div>
      </div>
      <div class="col offset-s1 s10" style="color:grey;">
        &nbsp; Genre :
        <p>
          <input class="with-gap" id="male" name="gender" type="radio" value="m" {if $user->getGender() == m}checked{/if}/>
          <label for="male">Homme</label>
        </p>
        <p>
          <input class="with-gap" id="female" name="gender" type="radio" value="f" {if $user->getGender() == f}checked{/if}/>
          <label for="female">Femme</label>
        </p>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input type="text" id="lastName" pattern="/^[a-Z ,.'-]+$/i" value={$user->getLastName()}>
          <label for="lastName">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="firstName" type="text" pattern="/^[a-Z ,.'-]+$/i" value={$user->getFirstName()}>
          <label for="firstName">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input class="datepicker" id="birthDate" type="time" data-value={$user->getBirthDate()|date_format:"%d/%m/%Y"}/>
          <label class="active" for="birthDate">Date de naissance</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12 center">
          <button class="btn waves-effect waves-light" id="updateInformation" type="submit">Changer</button>
          <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
        </div>
      </div>
    </div>
    <div id="passwordCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="password" type="password">
          <label for="password">Mot de passe actuel</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="newPassword" type="password">
          <label for="newPassword">Nouveau mot de passe</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="confirmPassword" type="password">
          <label for="confirmPassword">Confirmation du mot de passe</label>
        </div>
      </div>
      <div class="center">
        <button class="btn waves-effect waves-light" id="updatePassword" type="submit">Changer</button>
        <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
      </div>
    </div>
    <div id="addressCard">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="address" type="text" value={$user->getAddress()}>
          <label for="address">Adresse postale</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="zipCode" type="text" onkeypress="return isNumberKey(event)" maxlength="5" value={$user->getZipCode()}>
          <label for="zipCode">Code postal</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="city" type="text" value={$user->getCity()}>
          <label for="city">Ville</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input id="phone" type="text" onkeypress="return isNumberKey(event)" maxlength="10" value={$user->getPhone()}>
          <label for="phone">Téléphone</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateAddress" type="submit">Changer</button>
            <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
          </div>
        </div>
      </div>
    </div>
    <div id="paymentCard">
      <table class="striped highlight centered responsive-table">
        <thead>
          <tr>
            <th>Numero</th>
            <th colspan="3">Expiration</th>
            <th>Titulaire</th>
            <th>Supprimer</th>
            <th/>
          </tr>
        </thead>
        <tbody id="paymentCardTable">
          {foreach from=$creditCards item=creditCard}
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
              <a class="btn-floating waves-effect waves-light red deletePayment" id="{$creditCard->getId()}">
                <i class="material-icons">delete</i>
              </a>
            </td>
          </tr>
          {/foreach}
          <tr>
            <form id="manageAccountForm" action="/index.php?module=manageAccount&action=sendForm#paymentCard" method="post">
              <td>
                <div class="input-field">
                  <input class="validate" name="reference" type="text" onkeypress="return isNumberKey(event)" maxlength="16">
                  <label for="reference">Numéro de carte</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input name="expireMonth" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireMonth">Mois</label>
                </div>
              </td>
              <td>/</td>
              <td>
                <div class="input-field">
                  <input name="expireYear" type="text" onkeypress="return isNumberKey(event)" maxlength="2">
                  <label for="expireYear">Année</label>
                </div>
              </td>
              <td>
                <div class="input-field">
                  <input name="holder" type="text">
                  <label for="holder">Titulaire</label>
                </div>
              </td>
              <td>
                <button class="btn waves-effect waves-light" id="addPayment" type="submit">Ajouter</button>
              </td>
            </form>
          </tr>
        </tbody>
      </table>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <div class="center">
            <button class="btn waves-effect waves-dark white black-text cancel" type="reset">Quitter</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
                <th>Prix</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Quantité</th>
                <th/>
              </tr>
            </thead>
            <tbody class="cart" id="paymentCardTable">. {foreach from=$order->getItemInPackages() item=item}
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
                  {$item->getQuantity()}
                </td>
              </tr>
              {/foreach}
              </tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
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
{else}
<div class="col offset-s1 s10">
  <div class="input-field col s12">
    <div class="card-panel red">
      <p class="center-align white-text">Veuillez vous connecter pour accéder à cette page</p>
    </div>
  </div>
</div>
{/if}
<script src="js/manageAccount.js"></script>
{/block}
