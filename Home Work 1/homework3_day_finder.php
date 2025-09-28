<?php

    function getDayName($dayNumber){
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
    }
getDayName(5);
?>
