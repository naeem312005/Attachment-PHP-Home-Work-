<?php 

$name=$email=$password=$conPass=$number="";
$nameError=$emailError=$passError=$numError="";

function input_test($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

if(isset($_POST['submit'])){
    $name= input_test( $_POST['userName']);
    $email= input_test( $_POST['email']);
    $password= input_test( $_POST['password']);
    $conPass= input_test( $_POST['conPassword']);
    $number= input_test($_POST['number']);


if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameError="Only leters allowed";
    echo $nameError;
}else{
    echo "Name : ". $name;echo"<br>";
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $emailError = "Invalide email formet";
}else{
    echo "Email :" .  $email;echo"<br>";
}
if ($password < 6) {
   $emailError = "Password must be at least 6 characters";
   echo $passError;
}else{
    if($password!== $conPass){
        $passError = "Passowrd dose not Match";
        echo $passError;
    }else{
        echo "Passwod :" .  $password;echo"<br>";
    }
    
}
if (!preg_match("/^[0-9]{11}$/", $number)){
    $numError="Enter a valid phone number";
    echo $numError;
}else{
    echo "Phone Number :". $number;
}




 
   
}


echo"<br>";
echo"<br>";
?>

<a href="index.php">Go back</a>