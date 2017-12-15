/*$('#addToCart').click(function(){
    alert("ad");
    $.post('/index.php?module=cart&action=addToCart',
    {
        item:  $('#item').val()
    });
});*/

$('.addToCart').click(function() {
    var id = this.id;
    $.ajax({
        url: '/index.php?module=cart&action=addToCart',
        type: 'POST',
        dataType: "json",
        data: { item: $('.item-' + id).attr('name') },
        success: function( response ) 
      { 
          Materialize.toast(response.message, 2000, 'green');
      },  error: function( error )
      {
          Materialize.toast(response.message, 2000, 'red');
      }
    });
});

$(".input-quantity").on('change', function postinput(){
    var id = this.id;
    $.ajax({
        url: '/index.php?module=cart&action=setQuantity',
        type: 'POST',
        dataType: "json",
        data: { item: $('.item-' + id + '-quantity').attr('name'),  quantity: $('.item-' + id + '-quantity').val() },
        success: function( response ) 
      { 
          location.reload();
      },  error: function( error )
      {
          Materialize.toast(response.message, 2000, 'red');
      }
    });; 
});

$('.remove-item').click(function() {
    var id = this.id;
        $.ajax({
        url: '/index.php?module=cart&action=removeItem',
        type: 'POST',
        dataType: "json",
        data: { item: $('.item-' + id).attr('name') },
        success: function( response ) 
      { 
          location.reload();
      },  error: function( error )
      {
          Materialize.toast(response.message, 2000, 'red');
      }
    });; 
});

$('#cancel').click(function() {
    window.location.replace('/index.php?module=home');
});