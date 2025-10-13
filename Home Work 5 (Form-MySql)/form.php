<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation & MySQL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5 col-6 p-5 border rounded-1 ">
        <h1 class=" text-center p-2 fw-bold">Registration Form</h1>
        <form action="process.php" method="post" id="regForm" enctype="multipart/form-data">
            <div class="mb-2 ">
                <label for="" class="form-label">First Name</label>
                <small id="firstNameError" class="text-danger"></small>
                <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Enter Your First Name" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Last Name</label>
                <small id="lastNameError" class="text-danger"></small>
                <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter Your Last Name" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Email</label>
                <small id="emailError" class="text-danger"></small>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Password</label>
                <small id="passError" class="text-danger"></small>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Confirm Password</label>
                <small id="conPassError" class="text-danger"></small>
                <input class="form-control" type="password" name="conPass" id="conPass" placeholder="Enter Password" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Gender</label>
                <br>
                <input type="radio" class="form-check-input" name="gender" id="male" value="male" checked>
                <label for="male">Male</label>
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female">Female</label>
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Phone Number</label>
                <small id="numError" class="text-danger"></small>
                <input class="form-control" type="number" name="number" id="number" placeholder="Enter Your Phone Number" >
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Image</label>
                <small id="imgError" class="text-danger"></small>
                <input class="form-control" type="file" name="image" id="image" >
            </div>
            <div class="">
                
                <input type="submit" value="Login"   name="submit" id="submit" class="btn btn-primary">
            </div>

        </form>

    </div>



    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>