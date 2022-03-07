
const forme = document.getElementById('forme');
const login = document.getElementById('login');
const pwd = document.getElementById('pwd');
const button = document.getElementById('btn');
console.log(forme);

//Functions
function showError(input) {
    const items = input.parentElement;
    items.className = 'items error';



}
function showSuccess(input) {
    const items = input.parentElement;
    items.className = 'items success'
    const small = items.querySelector('small');
    small.innerText = "";

}
function checkEmail(input) {
    const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (re.test(input.value.trim().toLowerCase())) {

        showSuccess(input);
        return true;
    } else {
        showError(input);
        return false;
    }
}
function checkRequired(inputArray) {

    inputArray.forEach(function (input) {
        if (input.value == '') {
            return false

        }
        else {
            showSuccess(input);
            return true;
        }
    });
}
function getNameChamp(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);

}
function checkLength(input, min, max) {
    if (input.value.length < min) {
        // showError(input, `${getNameChamp(input)} doit etre superieur à ${min} caracteres`)
        showError();
        return false

    }
    else if (input.value.length > max) {
        //showError(input, `${getNameChamp(input)} doit etre inferieur à ${max} caracteres`)
        showError();
        return false

    }
    else {
        showSuccess();
        return true;
    }

}
function checkPwd(input) {
    if (!input.match(/[a-zA-Z]/) || (!input.match(/[0-9]/)) || (input < 6)) {
        //showError(input, 'Mot de pass incorrecte ')
        //alert('erreur');
        return true;
    }
}

//Events
// button.addEventListener('click', function (e) {
//     // e.preventDefault();
//     checkRequired([login, pwd]);
//     checkPwd(pwd.value)
//     checkPwd(pwd.value);

// })
// if (!checkEmail(login) || !checkLength(pwd, 5, 14) || !checkPwd(pwd)) {
//     forme.addEventListener('submit', function (e) {
//         e.preventDefault();
//     })
// }


