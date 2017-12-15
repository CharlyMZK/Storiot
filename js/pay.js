var rootURL = "https://storiot-mzkcharly.c9users.io/services/paymentService.php";
function launchPayment() {
    $.ajax({
        type: 'GET',
        url: rootURL+"/payOrder/1",   
        success: function(data) {
            var jsonResponse = JSON.parse(data);
            if(jsonResponse.status == true){
                $('.orderfinished').css("display","block");
            }
            $('.preloader-wrapper').css('display','none');
            $('.payment h5').text(jsonResponse.message);
        }
    });
}

launchPayment();