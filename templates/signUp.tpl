{extends file="Layouts/layout.tpl"} {block "body"}
<!-- Tablet and desktop -->
<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">

    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <form id="signUpForm">
              <div class="row">
                <div class="col offset-s1 s10">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="mail" type="text" class="validate">
                    <label for="mail">Email</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="confirmPassword" type="password" class="validate">
                    <label for="confirmPassword">Confirmation du mot de passe</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="lastName" type="text" class="validate">
                    <label for="lastName">Nom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="firstName" type="text" class="validate">
                    <label for="firstName">Prenom</label>
                  </div>
                </div>
                <div class="col offset-s1 s10" style="color:grey;">
                  &nbsp; Sexe : &nbsp;

                  <p>
                    <input name="sexGroup" type="radio" id="maleSex" />
                    <label for="maleSex">Homme</label>
                  </p>
                  <p>
                    <input name="sexGroup" type="radio" id="femaleSex" />
                    <label for="femaleSex">Femme</label>
                  </p>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="zip" type="text" class="validate">
                    <label for="zip">Code postal</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="address" type="text" class="validate">
                    <label for="address">Adresse postale</label>
                  </div>
                </div>
                <div class="col offset-s1 s10">
                  <div class="input-field col s12">
                    <input id="phone" type="text" class="validate">
                    <label for="phone">Téléphone</label>
                  </div>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Envoyer</button>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/signUp.js"></script>
{/block}
