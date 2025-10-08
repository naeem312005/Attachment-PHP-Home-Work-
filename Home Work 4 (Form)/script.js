let userName = document.getElementById("userName");
let email = document.getElementById("email");
let password = document.getElementById("password");
let conPassword = document.getElementById("conPassword");
let number = document.getElementById("number");
let regForm = document.getElementById("regForm");

//^ error call
let nameError = document.getElementById("nameError");
let emailError = document.getElementById("emailError");
let passError = document.getElementById("passError");
let conPassError = document.getElementById("conPassError");
let numError = document.getElementById("numError");

regForm.addEventListener("submit", function (e) {
  nameError.textContent = "";
  emailError.textContent = "";
  passError.textContent = "";
  conPassError.textContent = "";
  numError.textContent = "";

  let isvalid = true;

  if (userName.value.trim() === "") {
    nameError.textContent = "Plase enter your Name";
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

  if (!isvalid) {
    
    e.preventDefault();
  }else{
    alert("Form Submited")
  }
});
