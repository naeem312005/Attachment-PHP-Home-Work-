<?php
 require_once'vendor/autoload.php';

 $dotenv= Dotenv\Dotenv::createImmutable(__DIR__);
 $dotenv->load();

$server   = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname   = $_ENV['DB_NAME'];

$conn =new mysqli($server,$username,$password);

if($conn->connect_error){
die("Connection Faild".$conn->connect_error);
}
// else{
//     echo"working";
// }


$sql_db= "CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($sql_db)=== true){
    // echo"data base create successfull";
}
$conn =new mysqli($server,$username,$password,$dbname);

$sql_table = "CREATE TABLE IF NOT EXISTS employs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    image VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if($conn->query($sql_table)=== true){
    // echo"table create successfull";
}
// $conn->close();
?>