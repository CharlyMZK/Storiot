<!DOCTYPE html>
<html>
{include file='Layouts/header.tpl'}

<body>
  {include file='Layouts/navbar.tpl'} 
  {if $page eq 'home'} {include file='Layouts/carousel.tpl'} {/if}
  <section id="splash-blue">
    <div class="container">
      {block "body"}{/block}
    </div>
  </section>
</body>

{include file='Layouts/footer.tpl'}
</html>