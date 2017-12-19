{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Récupérer le mot de passe</h4>
    </div>
  </div>
</header>
<div class="row hide-on-small-only hero-home">
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
                {/if}
                {if $successMessage}
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <div class="card-panel green">
                      <p class="center-align white-text">{$successMessage}</p>
                    </div>
                  </div>
                </div>
                 {/if}
                <form id="recoverPasswordForm" action="/index.php?module=recoverPassword&action=sendForm" method="post">
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <p>Veuillez renseigner votre adresse email ci-dessous afin de récupérer votre mot de passe</p>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" name="email" type="email" {if $email}value="{$email}"{/if}>
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" id="submit" type="submit">Envoyer la demande</button>
                  <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
                </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{/block}