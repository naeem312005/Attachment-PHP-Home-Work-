<?php 
 require_once'vendor/autoload.php';

 $dotenv= Dotenv\Dotenv::createImmutable(__DIR__);
 $dotenv->load();

$server   = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname   = $_ENV['DB_NAME'];

$conn= new mysqli($server,$username,$password);

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}


$sql_db= "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql_db)=== true) {
    // echo"databse create sucess full";
}
$conn = new mysqli($server,$username,$password,$dbname);

$sql_table_1= "CREATE TABLE IF NOT EXISTS student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    roll INT(20) NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_table_1)=== true) {
    // echo"table create sucess full";
}

$sql_table_2= "CREATE TABLE IF NOT EXISTS teacher(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone INT(20) NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_table_2)=== true) {
    // echo"table create sucess full";
}
?>