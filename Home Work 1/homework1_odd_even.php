<?php

function checkOddEven($num){
    if ($num % 2 == 0) {
       echo("$num is Even Number");
    }
    else{
         echo("$num is Odd Number");
    }
} 

checkOddEven(7);

?>