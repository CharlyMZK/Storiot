$('#signUpForm').submit(function(event) {
    var regExEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-z\-0-9]+\.)+[a-z]{2,}))$/i;
    var regExPassword = /.{6,}/;
    var regExName = /[a-z ,.'-]+/i;
    var regExBithDate = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
    var regExAddress = /^[0-9]+[a-z ,.'-]+$/i;
    var regExZipCode = /[0-9]{5}/;
    var regExCity = /[a-z -]{1,30}/i;
    var regExPhone = /[0-9]{10}/;
    
    if(!regExEmail.test($('#email').val())){
        alert('L\'email n\'est pas valide');
        $('#email').addClass('custom-error');
        event.preventDefault(); 
    }
    if(!regExPassword.test($('#password').val())){
        alert('Le mot de passe doit faire 6 caractères minimum');
        event.preventDefault(); 
    }
    if(!regExPassword.test($('#confirmPassword').val())){
        alert('Le mot de passe de confirmation doit faire 6 caractères minimum');
        event.preventDefault(); 
    }
    if(!regExName.test($('#lastName').val())){
        alert('Le nom n\'est pas valide');
        event.preventDefault(); 
    }
    if(!regExName.test($('#firstName').val())){
        alert('Le prénom n\'est pas valide');
        event.preventDefault(); 
    }
    if(!regExBithDate.test($('#birthDate').val())){
        alert('La date de naissance n\'est pas valide');
        event.preventDefault(); 
    }
    if(!regExAddress.test($('#address').val())){
        alert('L\'adresse n\'est pas valide');
        event.preventDefault(); 
    }
    if(!regExZipCode.test($('#zipCode').val())){
        alert('Le code postal doit être composé de 5 chiffres');
        event.preventDefault(); 
    }
    if(!regExCity.test($('#city').val())){
        alert('La ville n\'est pas valide');
        event.preventDefault(); 
    }
    if(!regExPhone.test($('#phone').val())){
        alert('Le numéro de téléphone doit être composé de 10 chiffres');
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
    min: new Date(1920,1,1),
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