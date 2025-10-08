<?php
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container col-6 mt-5 border p-5">
        <h1 class="m-2 text-center p-2 fw-bold" >Registration Form</h1>
        <form action="process.php" method="post" id="regForm">
            <div class="mt-3 mb-3">
                <label for="" class="form-label">User Name</label>
                <small id="nameError" class="text-danger"></small>
                <input type="text" placeholder="Enter Your Name"  name="userName" id="userName" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <small id="emailError" class="text-danger"></small>
                <input type="email" placeholder="Enter Your email"  name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <small id="passError" class="text-danger"></small>
                <input type="password" placeholder="Enter Password"  name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Confirm Password</label>
                <small id="conPassError" class="text-danger"></small>
                <input type="password" placeholder="Enter password"  name="conPassword" id="conPassword" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone Number</label>
                <small id="numError" class="text-danger"></small>
                <input type="number" placeholder="Enter Your Phone Number"  name="number" id="number" class="form-control">
            </div>
            <div class="">
                
                <input type="submit" value="Login"   name="submit" id="submit" class="btn btn-primary">
            </div>

        </form>
    </div>


     
<script src="script.js"></script>
</body>
</html>