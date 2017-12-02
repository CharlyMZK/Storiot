{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <form id="contactForm">
            <div class="row">
              <div class="col offset-s1 s10">
                <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="">
              </div>

              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="address" type="text">
                  <label for="address" data-error="erreur" data-success="ok">Adresse postale</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="zipCode" type="text">
                  <label for="zipCode" data-error="erreur" data-success="ok">Code postal</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="city" type="text">
                  <label for="city" data-error="erreur" data-success="ok">Ville</label>
                </div>
              </div>
              <div class="col offset-s1 s10">
                <div class="input-field col s12">
                  <input class="validate" id="phone" type="text">
                  <label for="phone" data-error="erreur" data-success="ok">Téléphone</label>
                </div>
                <div class="center">
                  <button class="btn waves-effect waves-light" type="submit">Suivant</button>
                  <button class="btn waves-effect red" type="reset">Annuler</button>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
{/block}
