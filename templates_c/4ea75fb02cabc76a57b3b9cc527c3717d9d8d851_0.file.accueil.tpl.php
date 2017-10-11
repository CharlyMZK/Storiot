<?php
/* Smarty version 3.1.31, created on 2017-10-10 12:59:35
  from "/home/ubuntu/workspace/templates/accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59dcc437094ba0_67141355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea75fb02cabc76a57b3b9cc527c3717d9d8d851' => 
    array (
      0 => '/home/ubuntu/workspace/templates/accueil.tpl',
      1 => 1507640354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_59dcc437094ba0_67141355 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
 <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
                      &nbsp;  Sexe : &nbsp;
                  
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
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/materialize.min.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
