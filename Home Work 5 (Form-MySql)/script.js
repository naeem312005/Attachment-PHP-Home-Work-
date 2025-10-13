let firstName = document.getElementById("firstName");
let lastName = document.getElementById("lastName");
let email = document.getElementById("email");
let password = document.getElementById("password");
let conPassword = document.getElementById("conPass");
let number = document.getElementById("number");
let image = document.getElementById("image");
let regForm = document.getElementById("regForm");

//^ error call
let firstNameError = document.getElementById("firstNameError");
let lastNameError = document.getElementById("lastNameError");
let emailError = document.getElementById("emailError");
let passError = document.getElementById("passError");
let conPassError = document.getElementById("conPassError");
let numError = document.getElementById("numError");
let imgError = document.getElementById("imgError");

regForm.addEventListener("submit", function (e) {
    firstNameError.textContent = "";
    lastNameError.textContent = "";
    passError.textContent = "";
    conPassError.textContent = "";
    numError.textContent = "";

    let isvalid = true;

    if (firstName.value.trim() === "") {
        firstNameError.textContent = "Plase enter your First Name";
        isvalid = false;
    }
    if (lastName.value.trim() === "") {
        lastNameError.textContent = "Plase enter your Last Name";
        isvalid = false;
    }
    if (email.value.trim() === "") {
        emailError.textContent = "Plase enter your Email";
        isvalid = false;
    }
    if (password.value.trim() === "") {
        passError.textContent = "Plase enter Password";
        isvalid = false;
    } else if (password.value.length < 6) {
        passError.textContent = "Password must be at least 6 characters";
        isvalid = false;
    }
    if (conPassword.value.trim() === "") {
        conPassError.textContent = "Plase enter Password";
        isvalid = false;
    } else if (password.value !== conPassword.value) {
        conPassError.textContent = "Passowrd dose not Match";
        isvalid = false;
    }
    if (number.value.trim() === "") {
        numError.textContent = "Plase enter your Phone Number";
        isvalid = false;
    } else if (number.value.length !== 11) {
        numError.textContent = "Enter a valid phone number";
        isvalid = false;
    }
    if (image.files.length === 0) {
        imgError.textContent = "Please upload an image";
        isValid = false;
    }

    if (!isvalid) {

        e.preventDefault();
    } else {
        alert("Form Submited")
    }
});
