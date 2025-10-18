<?php 

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM task WHERE id=$id");
}

header("Location: profile.php");
exit();


?>