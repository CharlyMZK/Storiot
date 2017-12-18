{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col s12">
  <div class="page-header">
    <h4 class="header" id="header-main">Paiement</h4>
  </div>
</div>

<div class="row hide-on-small-only hero-home">
  <div class="col m10 offset-m1 s12 l10 offset-l1">
    <div class="row">
      <div class="col s11 m11">
        <div class="card blue-grey darken-1">
          <div class="card-content black-text">
            <h5>Carte utilisée</h5>
            <div class="row">
              <div class="col offset-s1 s10">
                <table class="highlight centered responsive-table">
                  <thead>
                    <tr>
                      <th>Numero</th>
                      <th colspan="3">Expiration</th>
                      <th>Titulaire</th>
                      <th/>
                    </tr>
                  </thead>
                  <tbody id="paymentCardTable">
                    <tr>
                      <td>
                        <p>{$creditCard->getReference()}</p>

                      </td>
                      <td colspan="3">
                        <p>{$creditCard->getExpireMonth()}/{$creditCard->getExpireYear()}</p>

                      </td>
                      <td>
                        <p>{$creditCard->getHolder()}</p>
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
        <div class="col s11 m11">
          <div class="card blue-grey darken-1">
            <div class="card-content black-text">
              <div class="row">
                <div class="col offset-s1 s10 ">
                  <img class="profile-img" src="https://colerisetemp2.files.wordpress.com/2009/11/dock-icon-flat.png" alt="logo storiot">
                  <div class="payment">
                    <h5>Nous procedons au paiement..</h5>
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
                    <div class="row"><i class="col offset-s5 s1 orderfinished material-icons">thumb_up</i></div>
                    <br/>
                    <div class="row">
                      <div class="bill-buttons"><a class="btn waves-effect waves-light" download="/bill.txt">Télécharger la facture</a>
                        <a href="index.php?module=home" class="btn waves-effect waves-dark white black-text" id="cancel">Retour</a></div>
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
