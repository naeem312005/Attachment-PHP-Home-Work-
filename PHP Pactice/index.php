<?php

//PHP Data Type

echo"<br>";

$string="Naeem";
$int= 10;
$float=10.10;
$boolean= true;
$arry= array("Naimul","Hasan","Naeem");
$null=null;


var_dump($string);echo"<br>";
var_dump($int);echo"<br>";
var_dump($float);echo"<br>";
var_dump($boolean);echo"<br>";
var_dump($null);
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


#php Object

class Student{

    function stuName($name){
        echo $name;
    }
}

$stuName = new Student();

$stuName->stuName("Naeem");

echo"<br>";
echo"<br>";
class StudentDetails{
    public $val;
    public $val2;

    function get_name($name){
        $this->val=$name;
        return $name;
    }
    function get_Roll($roll){
        $this->val2=$roll;
        return $roll;
    }
}

$stuName2 = new StudentDetails();

echo "Name : ". $stuName2->get_name("Naeem");
echo"<br>";
echo "Roll : ". $stuName2->get_roll(681738);
echo"<br>";

//Varible 

#Local Varible

function localVarible(){
    $name = "Naeem";
    echo $name;
}

localVarible();

echo"<br>";
#Global Varible

$x=10000;

function globalVarible(){
    global $x;
    echo $x;
}

globalVarible();
echo"<br>";


//Casting
$y=2000000000;

$y=(string)$y;

var_dump($y);
echo"<br>";
$z="1000";
// var_dump($z);
echo"<br>";
$z=(int)$z;
var_dump($z);
echo"<br>";
echo"<br>";

//Constants

define("MY_NAME","Nimuil Hasan Naeem");

echo MY_NAME;

const ROLL =681738;
echo"<br>";
echo ROLL;
echo"<br>";echo"<br>";

// IF statement
$gpa = 3.20;
if($gpa>= 3.60){
            echo"Your Grade is A+";
        }
        elseif($gpa>= 3.20){
            echo"Your Grade is A";
        }
        elseif($gpa>= 2.80 ){
            echo"Your Grade is B+";
        }
        elseif($gpa>= 2.50  ){
            echo"Your Grade is B";
        }
        elseif($gpa>= 2.00 ){
            echo"Your Grade is C";
        }
        elseif($gpa>= 1.00 ){
            echo"Your Grade is D";
        }
        else{
            echo"Your Grade is F";
        }


        echo"<br>";echo"<br>";

// Switch

$dayNumber=1;

switch($dayNumber){
            case '1':
                echo"Today is Saturday";
                break;
            case '2':
                echo"Today is Sunday";
                break;
            case '3':
                echo"Today is Monday";
                break;
            case '4':
                echo"Today is Tuesday";
                break;
            case '5':
                echo"Today is Wednesday";
                break;
            case '6':
                echo"Today is Thursday";
                break;
            case '7':
                echo"Today is Friday";
                break;
            default:
            echo"Invalid day";
        }

echo"<br>";
echo"<br>";

    //Loop

    //for Loop

    for ($i=0; $i <10 ; $i++) { 
        echo $i;
    }


    echo"<br>";
    echo"<br>";

    //while loop

    $i=0;

    while($i<=10){
       

        if ($i==7) break;

         $i++;
        echo $i;
    }
echo"<br>";
echo"<br>";


    //Do While Loop
    $a=1;
    do {
       echo $a;
       $a++;
    } while ($a <= 10);

echo"<br>";
echo"<br>";

    //Foreach
$cars = array("BMW","Toyta","Orange","Land Rover");
foreach($cars as $car){
    echo $car."<br>";
}

echo"<br>";
// Array

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


//Global Variables - Superglobals

//GLOBALS
$num = 392930;

function myFunction(){
   echo $GLOBALS['num'];
}

myFunction();

echo"<br>";
echo"<br>";

//_SERVER
echo $_SERVER['PHP_SELF'];echo"<br>";
echo $_SERVER['SERVER_NAME'];echo"<br>";
echo $_SERVER['HTTP_HOST'];echo"<br>";
echo $_SERVER['HTTP_REFERER'];echo"<br>";
echo $_SERVER['HTTP_USER_AGENT'];echo"<br>";
echo $_SERVER['SCRIPT_NAME'];

echo"<br>";
echo"<br>";


echo"<br>";
echo"<br>";






?>

<!-- _REQUEST -->


<form method="post">
  Name: <input type="text" name="name">
  <br>
  Email: <input type="text" name="email">
  <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello, " . $_REQUEST['name'];
    echo"<br>";
}

// POST

echo $_POST['email'] ;

?>