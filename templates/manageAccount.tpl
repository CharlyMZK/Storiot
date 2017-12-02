{extends file="Layouts/layout.tpl"} {block "body"}
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
            <input class="validate" id="email" type="email" value={$user->getEmail()}>
            <label for="email data-error=" erreur="" data-success="ok">Email</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input type="text" class="validate" name="lastName" value={$user->getLastName()}>
            <label for="lastName" data-error="erreur" data-success="ok">Nom</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="firstName" type="text" value={$user->getFirstName()}>
            <label for="firstName" data-error="erreur" data-success="ok">Prenom</label>
          </div>
        </div>
        <div class="col offset-s1 s10" style="color:grey;">
          &nbsp; Genre :
          <p>
            <input id="male" name="gender" type="radio" value="m" checked={$user->getGender()}/>
            <label for="male">Homme</label>
          </p>
          <p>
            <input id="female" name="gender" type="radio" value="f" checked={$user->getGender()}/>
            <label for="female">Femme</label>
          </p>
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateInformation" type="submit">Changer</button>
            <button class="btn waves-effect red" id="cancelInformation" type="reset">Annuler</button>
          </div>
        </div>
    </div>
    <div id="passwordCard">
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="password" type="password">
            <label for="password" data-error="erreur" data-success="ok">Mot de passe actuel</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="newPassword" type="password">
            <label for="newPassword" data-error="erreur" data-success="ok">Nouveau mot de passe</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="confirmPassword" type="password">
            <label for="confirmPassword" data-error="erreur" data-success="ok">Confirmation du mot de passe</label>
          </div>
        </div>
        <div class="center">
          <button class="btn waves-effect waves-light" id="updatePassword" type="submit">Changer</button>
          <button class="btn waves-effect red" id="cancelPassword" type="reset">Annuler</button>
        </div>
    </div>
    <div id="addressCard">
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="address" type="text" value={$user->getAddress()}>
            <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="zipCode" type="text" value={$user->getZipCode()}>
            <label for="zipCode" data-error="erreur" data-success="ok">Code postal</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="city" type="text" value={$user->getCity()}>
            <label for="city" data-error="erreur" data-success="ok">Ville</label>
          </div>
        </div>
        <div class="col offset-s1 s10">
          <div class="input-field col s12">
            <input class="validate" id="phone" type="text" value={$user->getPhone()}>
            <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
          </div>
          <div class="center">
            <button class="btn waves-effect waves-light" id="updateAddress" type="submit">Changer</button>
            <button class="btn waves-effect red" id="cancelAddress" type="reset">Annuler</button>
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
              <button class="btn waves-effect red deletePayment" value="{$creditCard->getId()}" type="submit">Supprimer</button>
            </td>
          </tr>
          {/foreach}
          <tr>
            <td>
              <input class="validate" id="reference" type="text">
              <label for="reference" data-error="erreur" data-success="ok">Numéro de carte</label>
            </td>
            <td>
              <input class="validate" id="expireMonth" type="text">
              <label for="expireMonth" data-error="erreur" data-success="ok">Mois</label>
            </td>
            <td>/</td>
            <td>
              <input class="validate" id="expireYear" type="text">
              <label for="expireYear" data-error="erreur" data-success="ok">Année</label>
            </td>
            <td>
              <input class="validate" id="holder" type="text">
              <label for="holder" data-error="erreur" data-success="ok">Titulaire</label>
            </td>
            <td>
              <button class="btn waves-effect waves-light" id="addPayment" type="submit">Ajouter</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/manageAccount.js"></script>
{/block}
