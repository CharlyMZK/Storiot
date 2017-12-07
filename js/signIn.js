/*$('#submit').click(function() {
    $.post('/index.php?module=signIn&action=sendForm', {
        email: $('#email').val(),
        password: $('#password').val()
    }).done(function(data) {
        alert(data.content);
        $('#manageAccount').text($('#firstName').val());
        Materialize.toast('Informations générales enregistrées', 2000, 'green');
    });
});*/

$('#cancel').click(function() {
    window.location.replace('/index.php?module=home');
});