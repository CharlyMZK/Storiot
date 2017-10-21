$("#signUpForm").submit(function(event) {
     
    var expressionName = /^[a-z ,.'-]+$/i;
    if(!expressionName.test(lastName.value)){
        alert("NOP00");
    }
    if(!expressionName.test(firstName.value)){
        alert("NOP00");
    }
    
     event.preventDefault();
});