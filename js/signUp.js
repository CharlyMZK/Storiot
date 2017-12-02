$("#signUpForm").submit(function(event) {
     
    var expressionName = /^[a-z ,.'-]+$/i;
    if(!expressionName.test(lastName.value)){
        alert("Le nom contient des caractères invalides");
    }
    if(!expressionName.test(firstName.value)){
        alert("Le prénom contient des caractères invalide");
    }
     event.preventDefault();
});