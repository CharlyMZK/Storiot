{extends file="Layouts/layout.tpl"} 
{block "body"}
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
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
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
                  <input class="validate" name="email" type="text" value={$email}>
                  <label for="email" data-error="erreur" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="password" type="password">
                  <label for="password" data-error="Le mot de passe doit faire 6 caractère minimum" data-success="ok">Mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="confirmPassword" type="password">
                  <label for="confirmPassword" data-error="erreur" data-success="ok">Confirmation du mot de passe</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" name="firstName" type="text" pattern="/^[a-Z ,.'-]+$/i" value={$firstName}>
                  <label for="firstName" data-error="erreur" data-success="ok">Prenom</label>
                </div>
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                <button class="btn waves-effect waves-dark white black-text" id="cancel" type="reset">Retour</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/signUp.js"></script>
{/block}