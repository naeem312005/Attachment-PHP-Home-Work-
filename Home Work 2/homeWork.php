<?php

//Date 

echo"<br>";
echo"<br>";

echo "To day is ". date("l");

echo"<br>";
echo"<br>";

//Indexed Array
 $fruits = array("Mango","Apple","Orange","Watermalen","Banana");
var_dump($fruits);
echo"<br>";
foreach($fruits as $fruit){
    echo $fruit."<br>";
}

echo"<br>";

//Associative Array


$student=array("name"=>"Naeem Topoder","age"=>20,"grade"=>"A");

echo "Student Name : ".$student['name'] ."<br>";
echo "Student Age : ".$student['age'] ."<br>";
echo "Student Grade : ".$student['grade'] ."<br>";

echo"<br>";

// If/Else 

$marks = 30;

if ($marks >= 40) {
   echo "You Pass";
}else{
    echo "You Fail";
}

echo"<br>";
echo"<br>";


//Multi-Dimensional Array

$users = array(
    array("name"=>"Naeem Topoder","age"=>22,"grade"=>"A"),
    array("name"=>"Naimul Topoder","age"=>18,"grade"=>"A"),
    array("name"=>"Hasan Topoder","age"=>30,"grade"=>"A")
);

foreach ($users as $user ) {
    if ($user["age"]>20) {
    echo "Student Name : ".$user['name'] ."<br>";
    echo "Student Age : ".$user['age'] ."<br>";
    echo "Student Grade : ".$user['grade'] ."<br>";
    echo"<br>";
    }
}

?>