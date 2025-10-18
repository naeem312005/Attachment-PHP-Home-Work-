<?php
session_start();
include 'db.php';
include 'helper.php';

$name = $email = $password = "";
$regError = $logError = $error = "";
//register
if (isset($_POST['register'])) {
    $name = input_test($_POST['name']);
    $email = input_test($_POST['email']);
    $password = password_hash(input_test($_POST['password']), PASSWORD_DEFAULT);


    $check_reg = "SELECT * FROM users WHERE email='$email'";
    $result_reg = $conn->query($check_reg);

    if ($result_reg->num_rows > 0) {
        $regError = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <p>Email already exists</p>
                  </div>';
    } else {
        $sql_insert = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        if ($conn->query($sql_insert) === true) {
            header("Location: login.php");
            exit();
        }
    }
}
//login
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
        $error="Password dose not match";
      }
    } else {
        $logError = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <p>Account not found</p>
                    </div>';
    }
}
//task
if(isset($_POST['task_add'])){
    $task = input_test($_POST['task']);
    $sql_task_insert = "INSERT INTO `task`( `task` ) VALUES ('$task')";
        if ($conn->query($sql_task_insert) === true) {
            header("Location: profile.php");
            exit();
        }
}