{extends file="Layouts/layout.tpl"} {block "body"}
<header>
  <div class="col s12">
    <div class="page-header">
      <h4 class="header" id="header-main">Paiement</h4>
    </div>
  </div>
</header>
<div class="row  hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s12 m11 before-pay-row">
        <div class="card blue-grey darken-1">
          <div class="card-content">
            <h5 class="paymentcard">Information de paiement</h5>
            <div class="row">
              <div class="col offset-s1 s10">
                <table class="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Id commande</th>
                      <th>Id client</th>
                      <th>Email</th>
                      <th>Montant transaction hors taxes</th>
                      <th>Montant transaction</th>
                      <th>Devise</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p id="orderId">{$orderId}</p>
                      </td>
                      <td>
                        <p id="userid">{$userConnected->getId()}</p>
                      </td>
                      <td>
                        <p id="email">{$userConnected->getEmail()}
                      </td>
                      <td>
                        <p id="amountWithoutTaxes">{$noTaxAmount}</p>
                      </td>
                      <td>
                        <p id="amountWithTaxes">{$amountWithTax}</p>
                      </td>
                      <td>
                        <p id="devise">€</p>
                      </td>
                      <td>
                        <p id="date">{$date}</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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
      <div class="row before-pay-row">
        <div class="bill-buttons">
          <button class="btn waves-effect waves-light launch-payment">Payer</button>
          <button class="btn waves-effect waves-dark white black-text cancel">Retour</button>
        </div>
      </div>
      <div class="row after-pay-row">
        <div class="col s12 m11">
          <div class="card blue-grey darken-1">
            <div class="card-content black-text">
              <div class="row">
                <div class="col offset-s1 s10 " id="paymentbox">
                  <img class="profile-img" src="img/logo.png" alt="logo storiot">
                  <div class="payment">
                    <p class="payment-title">Nous procedons au paiement..</p>
                    <p class="payment-subtitle"></p>
                    <p class="payment-informations"></p>
                    <p class="payment-date"></p>
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
                        <button class="btn waves-effect waves-light btn-pay">Télécharger la facture</button>
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
