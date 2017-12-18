{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Inscription</h4>
  </div>
</div>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="signUpForm" action="/index.php?module=signUp&action=sendForm" method="post">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="logo storiot">
              </div>
              {if $errorMessage}
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <div class="card-panel red">
                    <p class="center-align white-text">{$errorMessage}</p>
                  </div>
                </div>
              </div>
              {/if}
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="email" name="email" type="email" pattern="{literal}^[A-z0-9._%+-]+@[A-z0-9.-]+\.[A-z]{2,4}${/literal}">
                  <label for="email" data-error="L'email n'est pas valide" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="password" name="password" type="password" pattern="{literal}.{6,}{/literal}">
                  <label for="password" data-error="Le mot de passe doit faire 6 caractères minimum" data-success="ok">Mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="confirmPassword" name="confirmPassword" type="password" pattern="{literal}.{6,}{/literal}">
                  <label for="confirmPassword" data-error="Le mot de passe de confirmation doit faire 6 caractères minimum" data-success="ok">Confirmation du mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="col s12" id="radioBtnGender">
                  <p class="radio-text-color">Civilité :</p>
                  <p>
                    <input class="with-gap" id="male" name="gender" type="radio" value="m" />
                    <label for="male">Monsieur</label>
                  </p>
                  <p>
                    <input class="with-gap" id="female" name="gender" type="radio" value="f" />
                    <label for="female">Madame</label>
                  </p>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="lastName" name="lastName" type="text" pattern="^[A-z][A-z ,.'-]*$">
                  <label for="lastName" data-error="Le nom n'est pas valide" data-success="ok">Nom</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="firstName" name="firstName" type="text" pattern="^[A-z][A-z ,.'-]*$">
                  <label for="firstName" data-error="Le prénom n'est pas valide" data-success="ok">Prenom</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="datepicker" id="birthDate" name="birthDate" type="text" />
                  <label class="active" for="birthDate">Date de naissance</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="address" name="address" type="text" pattern="^[0-9]+[A-z ,.'-]+$">
                  <label for="address" data-error="L'adresse n'est pas valide" data-success="ok">Adresse postale</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="zipCode" name="zipCode" type="text" maxlength="5" pattern="{literal}[0-9]{5}{/literal}">
                  <label for="zipCode" data-error="Le code postal doit être composé de 5 chiffres" data-success="ok">Code postal</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="city" name="city" type="text" pattern="{literal}[A-z -]{1,30}{/literal}">
                  <label for="city" data-error="La ville n'est pas valide" data-success="ok">Ville</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="phone" name="phone" type="text" maxlength="10" pattern="{literal}[0-9]{10}{/literal}">
                  <label for="phone" data-error="Le numéro de téléphone doit être composé de 10 chiffres" data-success="ok">Téléphone</label>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                <button class="btn waves-effect waves-dark white black-text" id="cancel">Retour</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/signUp.js"></script>
{/block}