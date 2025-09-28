<?php
    function getGrade($gpa){
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
    }
getGrade(2.50);
?>