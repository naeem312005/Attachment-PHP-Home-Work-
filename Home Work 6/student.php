
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
    <div class="container col-6 mt-5 border p-5">
        <h1 class="m-2 text-center p-2 fw-bold" >Student Form</h1>
        <form action="process.php" method="post" id="regForm" enctype="multipart/form-data">
            <div class="mt-3 mb-3">
                <label for="" class="form-label"> Name</label>
                <small id="nameError" class="text-danger"></small>
                <input type="text" placeholder="Enter Your Name"  name="stu_name" id="userName" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <small id="emailError" class="text-danger"></small>
                <input type="email" placeholder="Enter Your email"  name="stu_email" id="email" class="form-control">
            </div>
         
            <div class="mb-3">
                <label for="" class="form-label">Roll Number</label>
                <small id="numError" class="text-danger"></small>
                <input type="number" placeholder="Enter Your Roll Number"  name="stu_roll" id="number" class="form-control">
            </div>
            <div class="mb-2 ">
                <label for="" class="form-label">Image</label>
                <small id="imgError" class="text-danger"></small>
                <input class="form-control" type="file" name="stu_img" id="image" >
            </div>
            <div class="">
                
                <input type="submit" value="Submit"   name="stu_submit" id="submit" class="btn btn-primary">

                <a class="btn btn-warning" href="index.php">Go Back</a>
            </div>

        </form>
    </div>
</body>
</html>
