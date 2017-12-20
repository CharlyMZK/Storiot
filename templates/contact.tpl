{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Contacter le support</h4>
    </div>
  </div>
</header>
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form name="contactForm" action="/contact/send" method="post">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="img/logo.png" alt="logo storiot">
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="email" name="email" type="email">
                  <label for="email" data-error="erreur" data-success="ok">Email</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <select id="category" name="category">
                    <option value="" disabled selected>Choisir une catégorie</option>
                    <option value="information">Informations</option>
                    <option value="orders">Commandes</option>
                    <option value="account">Compte</option>
                  </select>
                  <label for="category">Catégorie</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="subject" name="subject" type="text">
                  <label for="subject" data-error="erreur" data-success="ok">Sujet</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <textarea id="message" class="materialize-textarea" name="message"></textarea>
                  <label for="message">Message</label>
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
<script src="js/contact.js"></script>
{/block}
