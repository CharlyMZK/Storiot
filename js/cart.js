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
        data: { item: $('.item-' + id).attr('name') },
        context: document.body
    }).done(function(data) {
        Materialize.toast('Produit ajouté au panier', 2000, 'green');
    });
});
$(".input-quantity").on('change', function postinput(){
    var id = this.id;
    $.ajax({
        url: '/index.php?module=cart&action=setQuantity',
        type: 'POST',
        data: { item: $('.item-' + id + '-quantity').attr('name'),  quantity: $('.item-' + id + '-quantity').val() },
        context: document.body
    }).done(function(data) {
        Materialize.toast('La quantité a été modifée', 2000, 'green');
    }); 
});

$('.remove-item').click(function() {
    var id = this.id;
        $.ajax({
        url: '/index.php?module=cart&action=removeItem',
        type: 'POST',
        data: { item: $('.item-' + id).attr('name') },
        context: document.body
    }).done(function(data) {
        location.reload();
    });
});

$('#cancel').click(function() {
    window.location.replace('/index.php?module=home');
});