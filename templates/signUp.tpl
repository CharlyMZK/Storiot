<!DOCTYPE html>
<html>
{include file='header.tpl'}

<body>
  {include file='navbar.tpl'}

  <section id="splash-blue">


    <div class="container">

      <div class="col s12">
        <div class="page-header">
          <h4 id="header">Formulaire d'inscription</h4>
        </div>
      </div>

      <!-- Tablet and desktop -->
      <div class="row hide-on-small-only hero-home">
        <div class="col m10 offset-m1 s12 l10 offset-l1">

          <div class="row">
            <div class="col s11 m11">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <form>

                    <div class="row">
                      <div class="col offset-s1 s10">
                        <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Identifiant</label>
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
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Nom</label>
                        </div>
                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Prenom</label>
                        </div>
                      </div>
                      <div class="col offset-s1 s10" style="color:grey;">
                        &nbsp; Sexe : &nbsp;

                        <p>
                          <input name="group1" type="radio" id="test1" />
                          <label for="test1">Homme</label>
                        </p>
                        <p>
                          <input name="group1" type="radio" id="test2" />
                          <label for="test2">Femme</label>
                        </p>


                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Email</label>
                        </div>
                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Code postal</label>
                        </div>
                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Adresse</label>
                        </div>
                      </div>
                      <div class="col offset-s1 s10">
                        <div class="input-field col s12">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Téléphone</label>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
