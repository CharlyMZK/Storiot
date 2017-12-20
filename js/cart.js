function addToCart(id){
    $.ajax({
        url: '/index.php?module=cart&action=addToCart',
        type: 'POST',
        dataType: "json",
        data: { item: id },
        success: function( response ) 
      { 
          Materialize.toast(response.message, 2000, 'green');
      },  error: function( error )
      {
          Materialize.toast(response.message, 2000, 'red');
      }
    });
}

$(".input-quantity").on('change', function postinput(){
    var id = this.id;
    $.ajax({
        url: '/index.php?module=cart&action=setQuantity',
        type: 'POST',
        dataType: "json",
        data: { item: id,  quantity: $('.item-' + id + '-quantity').val() },
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
    var itemId = id.slice(-1);

        $.ajax({
        url: '/index.php?module=cart&action=removeItem',
        type: 'POST',
        dataType: "json",
        data: { item: itemId },
        success: function( response ) 
      { 
          location.reload();
      },  error: function( error )
      {
          Materialize.toast(response.message, 2000, 'red');
      }
    });; 
});

$('.cancel').click(function() {
    window.location.replace('home');
});