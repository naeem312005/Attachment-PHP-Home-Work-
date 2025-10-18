<?php 
session_start();
include'process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container col-6 mt-5 border p-5 bg-light">
        <h1 class="m-2 text-center p-2 fw-bold" >Login Form</h1>
        <?php if(isset($logError)){echo $logError;} ?>
        <form  method="post" id="logForm">
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <small id="logEmailError" class="text-danger"></small>
                <input type="email" placeholder="Enter Your email"  name="email" id="logEmail" class="form-control">
            </div>
         
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <small id="logPassError" class="text-danger"><?php if(isset($error)){echo $error;} ?></small>
                <input type="password" placeholder="Enter Your password"  name="password" id="logPass" class="form-control">
            </div>
            <div class="mb-2 ">
               <p>Don't have an account? <span class=""><a href="register.php">Register</a></span> </p>
            </div>
            <div class="">               
                <input type="submit" value="Login"   name="login" id="submit" class="btn btn-primary">
                <a class="btn btn-warning" href="home.php">Go Back</a>
            </div>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
