//JavaScrip form validation code

function validateForm() {
    let div = document.getElementById('alert');
    let login = document.forms.login_form.login.value;
    let password = document.forms.login_form.password.value;
    if (login == "" || password == "") {
        div.innerHTML = "Login lub hasło jest puste";
        div.style.display = "block";
        div.style.color = "red";
        return false;
    }
    else{
        divId.style.display = "none";
        return true;
    }
}   