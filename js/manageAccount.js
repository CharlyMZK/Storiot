$('#updateInformation').click(function(){
    $.post('/index.php?module=manageAccount&action=sendFormInformation#informationCard',
    {
        email:  $('#email').val(),
        lastName: $('#lastName').val(),
        firstName: $('#firstName').val(),
        gender: $('#gender').val()
    });
});

$('#cancelInformation').click(function(){
    window.location.replace('/index.php?module=manageAccount&action=sendFormInformation#informationCard');
});


$('#updateAddress').click(function(){
    $.post('/index.php?module=manageAccount&action=sendFormPassword#passwordCard',
    {
        password:  $('#password').val(),
        newPassword: $('#newPassword').val(),
        confirmPassword: $('#confirmPassword').val()
    });
});

$('#cancelPassword').click(function(){
    window.location.replace('/index.php?module=manageAccount&action=sendFormPassword#passwordCard');
});


$('#updateAddress').click(function(){
    $.post('/index.php?module=manageAccount&action=updateAddress#addressCard',
    {
        address:  $('#address').val(),
        zipCode: $('#zipCode').val(),
        city: $('#city').val(),
        phone: $('#phone').val()
    });
    
});

$('#cancelAddress').click(function(){
    window.location.replace('/index.php?module=manageAccount&action=updateAddress#addressCard');
});

$('.deletePayment').click(function() {
  $.ajax({
        url: '/index.php?module=manageAccount&action=deletePayment&idPayment='+$(this).val(),
        context: document.body
      }).done(function() {
        /*alert('Modifications enregistrée');*/
      });
      $(this).parent().parent().remove();
});

$('#addPayment').click(function(){
    $.post('/index.php?module=manageAccount&action=addPayment#paymentCard',
    {
        reference:  $('#reference').val(),
        expireMonth: $('#expireMonth').val(),
        expireYear: $('#expireYear').val(),
        holder: $('#holder').val()
    });
});