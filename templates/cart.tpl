{extends file="Layouts/layout.tpl"} {block "body"}
<div class="col m10 offset-m1 s12 l10 offset-l1">
  <div class="row">
    <div class="col s11 m11">
      <div class="card blue-grey darken-1">
        <div class="card-content black-text">
          <table class="striped highlight centered responsive-table">
            <thead>
              <tr>
                <th>Article</th>
                <th>Prix</th>
                <th>Note</th>
                <th>Qualité</th>
                <th/>
              </tr>
            </thead>
            <tbody id="paymentCardTable">
            </tbody>
          </table>
          <div class="center">
            <button class="btn waves-effect waves-light" type="submit">Commander</button>
            <button class="btn waves-effect red" type="reset">Retour</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{/block}