<!DOCTYPE html>
<html lang="en">
{include file='Layouts/head.tpl'}

<body>
  {include file='Layouts/navbar.tpl'} {if $page eq 'home'} {include file='Layouts/carousel.tpl'} {/if}
  <section id="splash-blue">
    <div class="container">
      {block "body"}{/block}
    </div>
  </section>

  {include file='Layouts/footer.tpl'}
</body>

</html>