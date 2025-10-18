let regForm = document.getElementById("regForm");
let logForm = document.getElementById("logForm");
let taskForm = document.getElementById("taskForm");

let userName = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let logEmail = document.getElementById("logEmail");
let logPass = document.getElementById("logPass");
let task = document.getElementById("task");

let nameError = document.getElementById("nameError");
let emailError = document.getElementById("emailError");
let passError = document.getElementById("passError");
let logEmailError = document.getElementById("logEmailError");
let logPassError = document.getElementById("logPassError");
let taskError = document.getElementById("taskError");


if (regForm) {
    regForm.addEventListener('submit', function (e) {

        nameError.textContent = "";
        emailError.textContent = "";
        passError.textContent = "";

        let isValid = true;

        if (userName.value.trim() === "") {
            nameError.textContent = "Plase Enter Your Name";
            isValid = false;
        }
        if (email.value.trim() === "") {
            emailError.textContent = "Plase Enter Your Email";
            isValid = false;
        }
        if (password.value.trim() === "") {
            passError.textContent = "Plase Enter Password";
            isValid = false;
        } else if (password.value.length < 6) {
            passError.textContent = "Password must be at least 6 characters";
            isValid = false;
        }

        if (!isValid) {

            e.preventDefault();
        } else {
            alert("Registration Successfull")
        }
    });

}

if (logForm) {
    logForm.addEventListener('submit', function (e) {
        logEmailError.textContent = "";
        logPassError.textContent = "";

        let isValid = true;

        if (logEmail.value.trim() === "") {
            logEmailError.textContent = "Plase Enter Your Email";
            isValid = false;
        }
        if (logPass.value.trim() === "") {
            logPassError.textContent = "Plase Enter Password";
            isValid = false;
        } else if (logPass.value.length < 6) {
            logPassError.textContent = "Password must be at least 6 characters";
            isValid = false;
        }

        if (!isValid) {

            e.preventDefault();
        } else {
            alert("Login Successfull");
        }
    });
}
if(taskForm){
    taskForm.addEventListener('submit',function(e){
        taskError.textContent="";
        let isValid=true;
        if(task.value.trim()===""){
            taskError.textContent="Plase Enter Your Task";
            isValid=false;
        }


           if (!isValid) {

            e.preventDefault();
        } 
    })
}