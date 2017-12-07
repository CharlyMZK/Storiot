$('#updateInformation').click(function() {
    $.post('/index.php?module=manageAccount&action=updateInformation', {
        email: $('#email').val(),
        gender: $('input[name=gender]:checked').val(),
        lastName: $('#lastName').val(),
        firstName: $('#firstName').val(),
        birthDate: $('#birthDate').val()
    }).done(function(data) {
        $('#manageAccount').text($('#firstName').val());
        Materialize.toast('Informations générales enregistrées', 2000, 'green');
    });
});

$('#updatePassword').click(function() {
    var newPassword = $('#newPassword').val();
    var confirmPassword = $('#confirmPassword').val();

    if (newPassword == confirmPassword) {
        $.post('/index.php?module=manageAccount&action=updatePassword', {
            password: $('#password').val(),
            newPassword: $('#newPassword').val(),
            confirmPassword: $('#confirmPassword').val()
        }).done(function(data) {
            Materialize.toast('Nouveau mot de passe enregistré', 2000, 'green');
        });
    }
    else {
        Materialize.toast('Le nouveau mot de passe de correspond pas avec le mot de passe de confirmation', 2000, 'red');
    }
});

$('#updateAddress').click(function() {
    $.post('/index.php?module=manageAccount&action=updateAddress', {
        address: $('#address').val(),
        zipCode: $('#zipCode').val(),
        city: $('#city').val(),
        phone: $('#phone').val()
    }).done(function(data) {
        Materialize.toast('Adresse enregistrée', 2000, 'green');
    });;
});

$('.deletePayment').click(function() {
    $.post('/index.php?module=manageAccount&action=deletePayment', {
        idPayment: $(this).attr('value')
    });
    $(this).parent().parent().remove();
});

$('.cancel').click(function() {
    window.location.replace('/index.php?module=home');
});

$('.datepicker').pickadate({
    // Les strings à utiliser
    monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
    monthsShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aoû', 'Sep', 'Oct', 'Nov', 'Dec'],
    weekdaysFull: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
    weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],

    selectMonths: true,
    selectYears: 200,
    firstDay: 1,
    min: new Date(1920, 1, 1),
    max: Date.now(),
    format: 'dd/mm/yyyy',

    // Boutons 
    today: '',
    clear: 'Effacer',
    close: 'Ok',


    // Accessibilité
    labelMonthNext: 'Mois suivant',
    labelMonthPrev: 'Mois précédent',
    labelMonthSelect: 'Sélectionner un mois',
    labelYearSelect: 'Sélectionner une année',

    closeOnSelect: false
});

function isNumberKey(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
    return e;
}