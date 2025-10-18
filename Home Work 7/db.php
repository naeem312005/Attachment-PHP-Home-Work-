<?php 
 require_once'vendor/autoload.php';

 $dotenv= Dotenv\Dotenv::createImmutable(__DIR__);
 $dotenv->load();

$server   = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname   = $_ENV['DB_NAME'];

$conn = new mysqli($server,$username,$password);

if ($conn->connect_error) {
    die("Connaction Failed" . $conn->connect_error);
}else{
    // ^echo"Connacrion Successfull";
}

$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($sql_db)===true){
    //^ echo"database create successfull";
}
$conn = new mysqli($server,$username,$password,$dbname);
$sql_table = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";
if ($conn->query($sql_table)===true) {
    //^ echo"table create successfull";
}
$sql_task = "CREATE TABLE IF NOT EXISTS task(
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(100) NOT NULL,
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";
if ($conn->query($sql_task)===true) {
    // echo"table create successfull";
}
?>