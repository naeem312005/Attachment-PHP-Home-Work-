<?php 
$server = "localhost"; 
$username = "root"; 
$password = "";  
$dbname = "account";  

$conn = new mysqli($server,$username,$password);

if ($conn->connect_error) {
    die("Connaction Failed" . $conn->connect_error);
}else{
  
}

$sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($sql_db)===true){
   
}
$conn = new mysqli($server,$username,$password,$dbname);
$sql_table = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL, 
    imge VARCHAR(100) NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";
if ($conn->query($sql_table)===true) {
   
}

session_start();
?>