{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
        <div class="page-header">
          <h4 class="header" id="header-main">Informations de paiement</h4>
        </div>
      </div>
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
                <div class="col offset-s1 s10" style="color:grey;">
                  &nbsp; Mode de paiement : &nbsp;
                  <p>
                    <input id="cardPayment" name="paymentGroup" type="radio" />
                    <label for="cardPayment">Carte de crédit</label>
                  </p>
                  <p>
                    <input id="paypalPayment" name="paymentGroup" type="radio" />
                    <label for="paypalPayment">Paypal</label>
                  </p>
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
