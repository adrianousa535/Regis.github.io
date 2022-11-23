//JavaScrip registration form validation code

let div = document.getElementById('reg_alert');
let errorcode = 1;

function validateRegistration() {
    div.innerHTML = "";

    let reg_login = document.forms.reg_form.reg_login.value;
    let reg_password = document.forms.reg_form.reg_password.value;
    let reg_password2 = document.forms.reg_form.reg_password2.value;
    let reg_email = document.forms.reg_form.reg_email.value;

    if (reg_login == "" || reg_password == "") {
        div.innerHTML += "Login lub hasło jest puste <br>";
        errorcode = 0;
    }
    if (reg_login.length < 8 || reg_login.length > 20) {
        div.innerHTML += "Login może mieć od 8 do 20 znaków <br>";
        errorcode = 0;
    }
    /*
    // Sprawdź czy nick jest już zajęty
        if(reg_login == "bazaloginów") {
            div.innerHTML += "Login jest już zajęty <br>";
            errorcode = 0;
        }
    */
    if (reg_password != reg_password2) {
        div.innerHTML += "Hasła muszą być identyczne <br>";
        errorcode = 0;
    }
    if (!reg_email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        div.innerHTML += "To nie jest e-mail <br>";
        errorcode = 0;
    }
    if (!errorcode){
        return false;
    }
}