<!DOCTYPE html>
<html>
{include file='Layouts/header.tpl'}

<body>
  {include file='Layouts/navbar.tpl'} {if $page eq 'home'} {include file='Layouts/carousel.tpl'} {/if}
  <section id="splash-blue">
    <div class="container">
      <div class="col s12">
        <div class="page-header">
          <h4 id="header">{$name}</h4>
        </div>
      </div>
      {block "body"}{/block}
    </div>
</body>
{include file='Layouts/footer.tpl'}

</html>