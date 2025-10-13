<?php
require 'dataBase.php';


$firstName = $lastName = $email = $password = $conPass = $gender = $number = $image = "";
$firstNameError = $lastNameError = $emailError = $passError = $numError = $imgError = "";

function input_test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $firstName = input_test($_POST['firstName']);
    $lastName = input_test($_POST['lastName']);
    $email = input_test($_POST['email']);
    $password = input_test($_POST['password']);
    $conPass = input_test($_POST['conPass']);
    $number = input_test($_POST['number']);
    $gender = $_POST['gender'];

    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $firstNameError = "Only leters allowed";
        echo $firstNameError;
    } else {
       
        echo "First Name : " . $firstName;
        echo "<br>";
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $lastNameError = "Only leters allowed";
        echo $lastNameError;
    } else {
        echo "Last Name : " . $firstName;
        echo "<br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalide email formet";
    } else {
        echo "Email :" .  $email;
        echo "<br>";
    }
    if ($password < 6) {
        $emailError = "Password must be at least 6 characters";
        echo $passError;
    } else {
        if ($password !== $conPass) {
            $passError = "Passowrd dose not Match";
            echo $passError;
        } else {
            echo "Passwod :" .  $password;
            echo "<br>";
        }
    }

    echo"Gender:".$gender;
    echo"<br>";
    if (!preg_match("/^[0-9]{11}$/", $number)) {
        $numError = "Enter a valid phone number";
        echo $numError;
    } else {
        echo "Phone Number :" . $number ;
         echo "<br>";
    }

    $file = $_FILES['image'];
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $file_size = $file['size'];

    $file_type = explode('.', $file_name);
    $file_extention = end($file_type);
    $new_file_name = uniqid() . '.' . $file_extention;
    $allow_extention = ['png', 'jpg', 'jpeg'];

    if ($file_size < 5000000) {
        if (in_array($file_extention, $allow_extention)) {
            $file_uplode = "image/" . $new_file_name;
            if (move_uploaded_file($file_temp, $file_uplode)) {
                echo "<img src='" . $file_uplode . "' width='200' alt='Uploaded Image'>";
            } else {
                echo "file uplode file";
            }
        } else {
            echo "only png,jpeg,jpg file allow";
        }
    } else {
        echo "Only 5mb file allow";
    }

    $sql_insert = "INSERT INTO `employs`( `firstname`, `lastname`, `email`, `phone`, `gender`, `image`, `password`) VALUES ('$firstName','$lastName','$email','$number','$gender','$file_uplode','$password')";

if($conn->query($sql_insert) == TRUE){
     echo "<br>";
   echo 'Data Insart';
}

}

$conn->close();
