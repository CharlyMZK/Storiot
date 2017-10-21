{extends file="Layouts/layout.tpl"} {block "body"}
<div class="card dark">
  <div class="card-tabs indicator blue">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#informations">Informations</a></li>
      <li class="tab"><a href="#test5">Paiement</a></li>
      <li class="tab"><a href="#test6">Adresse</a></li>
      <li class="tab"><a href="#test6">Test 3</a></li>
    </ul>
  </div>
  <div class="card-content">
    <div id="informations">
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input value="Bouchon" id="last_name" type="text" class="validate">
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="col offset-s1 s10">
        <div class="input-field col s12">
          <input value="Jean" id="first_name" type="text" class="validate">
          <label for="first_name">Prenom</label>
        </div>
      </div>
      <div class="col offset-s1 s10" style="color:grey;">
        &nbsp; Sexe :
        <p>
          <input name="sex_group" type="radio" id="sex_man" />
          <label for="sex_man">Homme</label>
        </p>
        <p>
          <input name="sex_group" type="radio" id="sex_female" />
          <label for="sex_female">Femme</label>
        </p>
      </div>
    </div>
    <div id="test5">Test 2</div>
    <div id="test6">Test 3</div>
  </div>
</div>
</div>
{/block}
