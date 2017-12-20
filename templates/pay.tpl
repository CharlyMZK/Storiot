{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Paiement</h4>
    </div>
  </div>
</header>
<div class="row hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s12 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content">
            <h5 class="paymentcard">Carte utilisée</h5>
            <div class="row">
              <div class="col offset-s1 s10">
                <table class="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Numero</th>
                      <th>Expiration</th>
                      <th>Titulaire</th>
                    </tr>
                  </thead>
                  <tbody id="paymentCardTable">
                    <tr>
                      <td>
                        <p id="reference">{$creditCard->getReference()}</p>
                      </td>
                      <td>
                        <span id="expireMonth">{$creditCard->getExpireMonth()}</span>/<span id="expireYear">{$creditCard->getExpireYear()}</span>
                      </td>
                      <td>
                        <p id="holder">{$creditCard->getHolder()}</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m11">
          <div class="card blue-grey darken-1">
            <div class="card-content black-text">
              <div class="row">
                <div class="col offset-s1 s10 ">
                  <img class="profile-img" src="img/logo.png" alt="logo storiot">
                  <div class="payment">
                    <p class="payment-title">Nous procedons au paiement..</h5>
                      <p class="payment-subtitle"></p>
                      <div class="row">
                        <div class="col offset-s5 s1">
                          <div class="preloader-wrapper big active">
                            <div class="spinner-layer spinner-blue-only">
                              <div class="circle-clipper left">
                                <div class="circle"></div>
                              </div>
                              <div class="gap-patch">
                                <div class="circle"></div>
                              </div>
                              <div class="circle-clipper right">
                                <div class="circle"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row"><i class="col offset-m5 offset-s4 s1 orderfinished material-icons">thumb_up</i></div>
                      <br/>
                      <div class="row">
                        <div class="bill-buttons">
                          <button class="btn waves-effect waves-light btn-pay" download="/bill.txt">Télécharger la facture</button>
                          <button class="btn waves-effect waves-dark white black-text" id="cancel">Retour</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/pay.js"></script>
{/block}
