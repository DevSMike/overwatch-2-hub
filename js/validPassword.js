let password = document.querySelector("input[name='password']");
let secondPassword = document.querySelector("input[name='secondpassword']");
let form = document.getElementById('form');
// let passwordInput = document.getElementById("passwordInput")

let newElement = document.createElement("p");
let newText = document.createTextNode("Пароли не совпадают");
newElement.appendChild(newText);

newElement.className = "invalidPass";

let firstPass = password.value;
let secPass = secondPassword.value;


function validatePassword() {
    console.log(password.value);
    console.log(secondPassword.value);

    if (form.reportValidity()) {
        if (password.value !== secondPassword.value) {
            passwordInput.appendChild(newElement)
        } else {
            form.submit();
        }
    }
}
