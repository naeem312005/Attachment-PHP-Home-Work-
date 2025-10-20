<?php 

include 'db.php';



$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $image = $row['image'];
} else {
    echo "User not found!";
    exit();
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">


</head>
<style>
    .table-body {
        margin-top: 10%;
    }

    a {
        text-decoration: none;
        list-style: none;
    }

    .image {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        margin-left: 20px;
        border: 2px solid gray;
    }
</style>

<body>
    <header>
        <h2 class="logo">logo</h2>
        <ul class="navlist">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    </header>
    <div class="container col-3 border p-5 bg-light table-body">
        <h1 class=" text-center p-2 fw-bold">User Profile</h1>
        <img src="<?php echo $image; ?>" class="card-img-top image " alt="...">
        <div class=" mt-3 card-body">
            <h5 class="card-text">Name: <span><?php echo $name; ?></span></h5>
            <h6 class=" card-text">Email: <span><?php echo $email; ?></span></h6>
<a href="user_profile_update.php?id=<?= $row['id'] ?>" class="btn btn-primary">Update</a>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>


    </div>
</body>

</html>