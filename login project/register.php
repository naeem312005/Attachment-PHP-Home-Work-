<?php
include 'db.php';
include 'helper.php';
$success = [];
$success[] = "";
$errors = [];
$errors[] = "";

if (isset($_POST['register'])) {
    $name = input_test($_POST['name']);
    $email = input_test($_POST['email']);
    $password = password_hash(input_test($_POST['password']), PASSWORD_DEFAULT);

    $filePath = uplodeImage('image', 'user_image/', 'users', $conn);

    $check_reg = "SELECT * FROM users WHERE email='$email'";
    $result_reg = $conn->query($check_reg);

    if ($result_reg->num_rows > 0) {
        $regError = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <p>Email already exists</p>
                  </div>';
    } else {
        if ($filePath) {
            $sql_insert = "INSERT INTO `users`( `name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','$filePath')";
            if ($conn->query($sql_insert) === true) {
                header("Location:login.php");
                exit();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container col-6 mt-5 border p-5 bg-light">
        <h1 class="m-2 text-center p-2 fw-bold">Registration Form</h1>

        <?php if(isset($regError)){echo $regError;}?>
        <form method="post" id="regForm" enctype="multipart/form-data">
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
                <label class="form-label">Image</label>
                <small id="passError" class="text-danger"></small>
                <input type="file" name="image" id="image" class="form-control" placeholder="Enter your Image">
            </div>
            <div class="mb-3">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
            <a href="home.php" class="btn btn-warning">Go Back</a>
        </form>

    </div>


</body>

</html>