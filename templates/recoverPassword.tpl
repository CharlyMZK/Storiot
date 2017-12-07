{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Récupérer le mot de passe</h4>
  </div>
</div>
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="recoverPasswordForm" action="/index.php?module=recoverPassword&action=sendForm" method="post">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <p>Veuillez renseigner votre adresse email ci-dessous afin de récupérer votre mot de passe</p>
                    </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input class="validate" name="email" type="email">
                    <label for="email" data-error="erreur" data-success="ok">Email</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" id="submit" type="submit">Envoyer la demande</button>
                  <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/recoverPassword.js"></script>
{/block}