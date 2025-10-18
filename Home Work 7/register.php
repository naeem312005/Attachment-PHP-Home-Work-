<?php 

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
        <h1 class="m-2 text-center p-2 fw-bold">Registration Form</h1>
        <?php if(isset($regError)){echo $regError;} ?>
        <form  method="post" id="regForm">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <small id="nameError" class="text-danger"></small>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <small id="emailError" class="text-danger"></small>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <small id="passError" class="text-danger"></small>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
            <a href="home.php" class="btn btn-warning">Go Back</a>
        </form>

    </div>


    <script src="script.js"></script>
</body>

</html>