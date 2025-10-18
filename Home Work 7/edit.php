<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM task WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $task = $_POST['task'];
   
    $update = "UPDATE task SET task='$task' WHERE id=$id";
    if ($conn->query($update)) {
        header("Location: profile.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container col-6 bg-light mt-5 p-5">
    <h2 class="mb-4 text-center">Edit Student</h2>
    <form method="POST" >
        <div class="mb-3">
           
            <input type="text" name="task" value="<?= $row['task'] ?>" class="form-control" required>
        </div>
        
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="profile.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
