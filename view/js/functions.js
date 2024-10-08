let isTypePassword = true;

function showPassword() {
    let iconPassword = document.getElementById('iconPassword');
    let inputPassword = document.getElementById('password');

    if(isTypePassword){
        iconPassword.className = "bi bi-eye-fill";
        inputPassword.type = "text";
        isTypePassword = false;
    }else{
        iconPassword.className= "bi bi-eye-slash-fill";
        inputPassword.type = "password";
        isTypePassword = true;
    }
}