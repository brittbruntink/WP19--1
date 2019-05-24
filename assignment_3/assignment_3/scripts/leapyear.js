let regexName = /^([a-zA-Z]|[à-ú]|[À-Ú])+$/u;
let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let regexPlace = /^([a-zA-Z]|[à-ú]|[À-Ú])+$/u;

function validateName(){

    let name = $('#inputName');
    let name_value = name.val();

    if (name_value.match(regexName) && name_value !== ''){
        name.removeClass('is-invalid');
        name.addClass('is-valid');
        return true;

    } else {
        name.removeClass('is-valid');
        name.addClass('is-invalid');
        return false;
    }
}

function validateAge(){

    let age = $('#inputAge');
    let age_value = age.val();

    if (age_value > 0 && age_value <200 && age_value !== ''){
        age.removeClass('is-invalid');
        age.addClass('is-valid');
        return true;

    } else {
        age.removeClass('is-valid');
        age.addClass('is-invalid');
        return false;
    }
}

function validateEmail(){

    let email = $('#inputEmail');
    let email_value = email.val();

    if (email_value.match(regexEmail) && email_value !== ''){
        email.removeClass('is-invalid');
        email.addClass('is-valid');
        return true;

    } else {
        email.removeClass('is-valid');
        email.addClass('is-invalid');
        return false;
    }
}

function validatePlace(){

    let place = $('#inputPlace');
    let place_value = place.val();

    if (place_value.match(regexPlace) && place_value !== ''){
        place.removeClass('is-invalid');
        place.addClass('is-valid');
        return true;

    } else {
        place.removeClass('is-valid');
        place.addClass('is-invalid');
        return false;
    }
}

$(function() {

    $('form #inputName').keyup(function() {
        validateName();
    });

    $('form #inputAge').keyup(function() {
        validateAge();
    });

    $('form #inputEmail').keyup(function() {
        validateEmail();
    });

    $('form #inputPlace').keyup(function() {
        validatePlace();
    });

    $('form #submit').click(function() {
        if (validateName() && validateAge() && validateEmail() && validatePlace()){
            $('form').submit();
        }
    });
});

