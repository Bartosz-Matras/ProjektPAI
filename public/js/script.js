const form = document.querySelector('form[id="register-form"]');
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="haslo2"]');


const form2 = document.querySelector('form[id="register-form2"]');
const emailInput2 = form2.querySelector('input[name="email"]');
const confirmedPasswordInput2 = form2.querySelector('input[name="haslo2"]');


function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword){
    return password === confirmedPassword;
}



function markValidation(element, condition){
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}


emailInput.addEventListener('keyup', function () {
    setTimeout( function (){
            markValidation(emailInput, isEmail(emailInput.value))
        },
        1000
    );
});

confirmedPasswordInput.addEventListener('keyup', function () {
    setTimeout( function () {
            const condition = arePasswordsSame(
                confirmedPasswordInput.previousElementSibling.value,
                confirmedPasswordInput.value
            );
            markValidation(confirmedPasswordInput, condition);
        },
        1000
    );
});




emailInput2.addEventListener('keyup', function () {
    setTimeout( function (){
            markValidation(emailInput2, isEmail(emailInput2.value))
        },
        1000
    );
});

confirmedPasswordInput2.addEventListener('keyup', function () {
    setTimeout( function () {
            const condition = arePasswordsSame(
                confirmedPasswordInput2.previousElementSibling.value,
                confirmedPasswordInput2.value
            );
            markValidation(confirmedPasswordInput2, condition);
        },
        1000
    );
});


