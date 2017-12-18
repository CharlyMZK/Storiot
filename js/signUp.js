$('#signUpForm').submit(function(event) {
    var regExEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-z\-0-9]+\.)+[a-z]{2,}))$/i;
    var regExPassword = /.{6,}/;
    var regExName = /[a-z ,.'-]+/i;
    var regExBithDate = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
    var regExAddress = /^[0-9]+[a-z ,.'-]+$/i;
    var regExZipCode = /[0-9]{5}/;
    var regExCity = /[a-z -]{1,30}/i;
    var regExPhone = /[0-9]{10}/;

    var error = false;

    if (!regExEmail.test($('#email').val())) {
        $('label[for="email"]').removeClass().addClass('active');
        $('label[for="email"]').attr('data-error', 'L\'email n\'est pas valide');
        $('#email').addClass('invalid');
        error = true;
    }
    if (!regExPassword.test($('#password').val())) {
        $('label[for="password"]').removeClass().addClass('active');
        $('label[for="password"]').attr('data-error', 'Le mot de passe doit faire 6 caractères minimum');
        $('#password').addClass('invalid');
        error = true;
    }
    if (!regExPassword.test($('#confirmPassword').val())) {
        $('label[for="confirmPassword"]').removeClass().addClass('active');
        $('label[for="confirmPassword"]').attr('data-error', 'Le mot de passe de confirmation doit faire 6 caractères minimum');
        $('#confirmPassword').addClass('invalid');
        error = true;
    }
    if ($('input[name="gender"]:checked').length == 0) {
        $('#radioBtnGender').append('<span class="custom-error">Veuillez selectionner une civilité</span>');
        error = true;
    }
    if (!regExName.test($('#lastName').val())) {
        $('label[for="lastName"]').removeClass().addClass('active');
        $('label[for="lastName"]').attr('data-error', 'Le nom n\'est pas valide');
        $('#lastName').addClass('invalid');
        error = true;
    }
    if (!regExName.test($('#firstName').val())) {
        $('label[for="firstName"]').removeClass().addClass('active');
        $('label[for="firstName"]').attr('data-error', 'Le prénom n\'est pas valide');
        $('#firstName').addClass('invalid');
        error = true;
    }
    if (!regExBithDate.test($('#birthDate').val())) {
        $('label[for="birthDate"]').removeClass().addClass('active');
        $('label[for="birthDate"]').attr('data-error', 'Champ invalide');
        $('#birthDate').addClass('invalid');
        error = true;
    }
    else {
        $('#birthDate').addClass('valid');
    }
    if (!regExAddress.test($('#address').val())) {
        $('label[for="address"]').removeClass().addClass('active');
        $('label[for="address"]').attr('data-error', 'L\'adresse n\'est pas valide');
        $('#address').addClass('invalid');
        error = true;
    }
    if (!regExZipCode.test($('#zipCode').val())) {
        $('label[for="zipCode"]').removeClass().addClass('active');
        $('label[for="zipCode"]').attr('data-error', 'Le code postal doit être composé de 5 chiffres');
        $('#zipCode').addClass('invalid');
        error = true;
    }
    if (!regExCity.test($('#city').val())) {
        $('label[for="city"]').removeClass().addClass('active');
        $('label[for="city"]').attr('data-error', 'La ville n\'est pas valide');
        $('#city').addClass('invalid');
        error = true;
    }
    if (!regExPhone.test($('#phone').val())) {
        $('label[for="phone"]').removeClass().addClass('active');
        $('label[for="phone"]').attr('data-error', 'Le numéro de téléphone doit être composé de 10 chiffres');
        $('#phone').addClass('invalid');
        error = true;
    }

    if ($('#password').val() != $('#confirmPassword').val()) {
        $('label[for="password"]').attr('data-error', 'Le mot de passe et le mot de passe de confirmation ne correspondent pas');
        $('label[for="confirmPassword"]').attr('data-error', 'Le mot de passe et le mot de passe de confirmation ne correspondent pas');
        $('#password').addClass('invalid');
        $('#confirmPassword').addClass('invalid');
        error = true;
    }

    if (error) {
        Materialize.toast('Il y a des erreurs dans le formulaire, veuillez les corriger !', 4000, 'red');
        event.preventDefault();
    }
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