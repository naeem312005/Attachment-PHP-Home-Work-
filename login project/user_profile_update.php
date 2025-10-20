<?php
include 'db.php';
include'helper.php';

$id =$_GET['id'];
$sql_update = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql_update);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = input_test($_POST['name']);

    $password = password_hash(input_test($_POST['password']), PASSWORD_DEFAULT);
    $image =  uplodeImage('image', 'user_image/', 'users', $conn);
   

    if($image){
    $update = "UPDATE users SET `name`='$name',`password`='$password',`image`='$image' WHERE id=$id";
    if ($conn->query($update)) {
        header("Location: profile.php");
    }
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container col-6 mt-5 border p-5 bg-light">
        <h1 class="m-2 text-center p-2 fw-bold">Profile Update</h1>

       
        <form method="post" id="regForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <small id="nameError" class="text-danger"></small>
                <input type="text" name="name" id="name" value="<?= $row['name'] ?>" class="form-control" placeholder="Enter your name">
            </div>
           <div class="mb-3">
                <label class="form-label">Password</label>
                <small id="passError" class="text-danger"></small>
                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <small id="passError" class="text-danger"></small>
                <input type="file" name="image" id="image" class="form-control" placeholder="Enter your Image">
            </div>
            
            <input type="submit" name="update" value="Update" class="btn btn-primary">
            <a href="profile.php" class="btn btn-warning">Cancel</a>
        </form>

    </div>


</body>

</html>