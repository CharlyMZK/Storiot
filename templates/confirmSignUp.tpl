{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Confirmation d'inscription</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <div class="row">
            <div class="col offset-s1 s10">
              <img class="profile-img" src="img/logo.png" alt="logo storiot">
            </div>
            {if $errorMessage}
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <div class="card-panel red">
                  <p class="center-align white-text">{$errorMessage}</p>
                </div>
              </div>
            </div>
            {else}
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Bonjour {($user->getGender() == m)?(Monsieur):(Madame)} {$user->getLastName()} {$user->getFirstName()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p> Nous validons votre inscription avec les données saisies suivantes :</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Email : {$user->getEmail()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>
                  <p>Mot de passe (haché) : {$user->getPassword()}</p>
                </p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>
                  <p>Date de naissance : {$user->getBirthDate()|date_format:"%d/%m/%Y"}</p>
                </p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Adresse : {$user->getAddress()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Code postal : {$user->getZipCode()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Ville : {$user->getCity()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <p>Téléphone : {$user->getPhone()}</p>
              </div>
            </div>
            <div class="col offset-s1 s10">
              <div class="input-field col s12">
                <div class="center">
                  <button class="btn waves-effect waves-light" id="ok">Ok</button>
                </div>
              </div>
            </div>
            {/if}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/confirmSignUp.js"></script>
{/block}
