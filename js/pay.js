var rootURL = "https://storiot-mzkcharly.c9users.io/services/paymentService.php";
$(".launch-payment").click(function(){
    $('.after-pay-row').show();
    $('.before-pay-row').hide();
    $.ajax({
        type: 'POST',
        url: rootURL+"/payOrder/"+$("#orderId"),   
        data:{ref :$('#reference').text() , expireMonth : $('#expireMonth').text(), expireYear : $('#expireYear').text(), holder : $('#holder').text(), userid : $('#userid').text() , email : $('#email').text() , amountWithoutTaxes : $('#amountWithoutTaxes').text()  , amountWithTaxes : $('#amountWithTaxes').text()  , devise : $('#devise').text()  , date : $('#date').text()},
        success: function(data) {
            var jsonResponse = JSON.parse(data);
            if(jsonResponse.status == true){
                $('.orderfinished').css("display","block");
            }
            $('.preloader-wrapper').css('display','none');
            $('.payment-title').text(jsonResponse.message);
            $('.payment-subtitle').text("reference : "+jsonResponse.hashcode);
            $('.payment-informations').text("Montant prélevé : "+jsonResponse.pricePaid);
            $('.payment-date').text("à la date du "+jsonResponse.date);
            
        }
    });
});

