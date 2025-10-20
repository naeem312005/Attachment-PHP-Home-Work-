<?php 
include 'db.php';
include 'helper.php';
if (isset($_POST['login'])) {
    $email = input_test($_POST['email']);
    $password = input_test($_POST['password']); 

    $check_log = "SELECT * FROM users WHERE email='$email'";
    $result_log = $conn->query($check_log);

    if ($result_log->num_rows > 0) {
        $row = $result_log->fetch_assoc();
      if(password_verify($password,$row['password'])){
             header("Location: profile.php");
            exit();
      }else{
      
      }
    } else {
        $logError = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <p>Account not found</p>
                    </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container col-6 mt-5 border p-5 bg-light">
        <h1 class="m-2 text-center p-2 fw-bold">Login Form</h1>
        <?php if(isset($logError)){echo $logError;}?>
        <form  method="post" id="regForm" enctype="multipart/form-data">
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
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
            <input type="submit" name="login" value="Login" class="btn btn-primary">
            <a href="home.php" class="btn btn-warning">Go Back</a>
        </form>

    </div>


</body>

</html>