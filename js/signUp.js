$("#submit").submit(function(event) {
     alert()
    var expressionName = /^[a-z ,.'-]+$/i;
    if(!expressionName.test(lastName.value)){
        alert("Le nom contient des caractères invalides");
    }
    if(!expressionName.test(firstName.value)){
        alert("Le prénom contient des caractères invalide");
    }
     event.preventDefault();
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