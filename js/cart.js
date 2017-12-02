
/*$('#addToCart').click(function(){
    alert("ad");
    $.post('/index.php?module=cart&action=addToCart',
    {
        item:  $('#item').val()
    });
});*/

$('#addToCart').click(function() {
    $.ajax({
    url: '/index.php?module=cart&action=addToCart',
    context: document.body
  }).done(function(data) {
    alert(data);
  });
});