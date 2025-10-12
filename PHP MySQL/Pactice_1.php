<?php
// MySql()
//close()
//query()
//Dasabase Create
//Table Create
//Length/Values
//Type

$servernme = "localhost"; //* Server Name
$username = "root"; //* username
$password = "";  //* User Password
$dbName = "MyDB";  //* Databse Name


//^ Create Server Connection

$conn = new mysqli($servernme, $username, $password);

//^ Check Server Connection

if ($conn->connect_error) {
    die("Connection Faild" . $conn->connect_error);
} else {
    echo "Connection Sucessfully <br>";
}
//? Create Database 

$sql_db = "CREATE DATABASE IF NOT EXISTS $dbName";

//? Check Database Connection

if ($conn->query($sql_db) === TRUE) {
    echo "Database Create Successfully <br>";
} else {
    echo "Faield Database Create" . $conn->error;
}
$conn = new mysqli($servernme, $username, $password, $dbName);

//? Table create


$sql_table = "CREATE TABLE IF NOT EXISTS users(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL, 
        email VARCHAR(100) NOT NULL, 
        password VARCHAR(100) NOT NULL
        )";


//? Table create connection Check

if ($conn->query($sql_table) === TRUE) {
    echo "Table crete successfully <br>";
} else {
    echo "Failed Table crete" . $conn->error;
}


$conn->close();
