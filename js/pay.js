var rootURL = "https://storiot-mzkcharly.c9users.io/services/paymentService.php";
function launchPayment() {
    $.ajax({
        type: 'POST',
        url: rootURL+"/payOrder/1",   
        data:{ref :$('#reference').text() , expireMonth : $('#expireMonth').text(), expireYear : $('#expireYear').text(), holder : $('#holder').text()},
        success: function(data) {
            var jsonResponse = JSON.parse(data);
            if(jsonResponse.status == true){
                $('.orderfinished').css("display","block");
            }
            $('.preloader-wrapper').css('display','none');
            $('.payment-title').text(jsonResponse.message);
            $('.payment-subtitle').text("reference : "+jsonResponse.hashcode)
        }
    });
}

launchPayment();