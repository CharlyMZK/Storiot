$("#signUpForm").submit(function(event) {
     
    var expressionName = /^[a-z ,.'-]+$/i;
    var expressionEmail = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2}$/;
    if(!expressionName.test(lastName.value)){
        alert("Le nom contient des caractères invalides");
    }
    if(!expressionName.test(firstName.value)){
        alert("Le prénom contient des caractères invalide");
    }
    
    if(!expressionName.test(email.value)){
        alert("L'adresse email invalide");
    }
     event.preventDefault();
});