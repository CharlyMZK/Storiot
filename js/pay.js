var rootURL = "https://storiot-mzkcharly.c9users.io/services/paymentService.php";
function launchPayment() {
    $.ajax({
        type: 'GET',
        url: rootURL+"/payOrder/1",   
        success: function(data) {
            $('.orderfinished').css("display","block");
            $('.preloader-wrapper').css('display','none');
            $('.payment h5').text("Le paiement a été accepté, merci !");
        }
    });
}

launchPayment();