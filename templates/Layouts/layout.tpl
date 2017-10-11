<!DOCTYPE html>
<html>
  {include file='Layouts/header.tpl'}
  <body>
    {include file='Layouts/navbar.tpl'}
    <section id="splash-blue">
      <div class="container">
        <div class="col s12">
          <div class="page-header">
            <h4 id="header">{$name}</h4>
          </div>
        </div>
        {block "body"}{/block}
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
