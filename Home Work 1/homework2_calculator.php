<?php

function calculate($a, $b, $operator){

    if($operator == '+'){
        echo($a+$b);
    }
    elseif($operator == '-'){
        echo($a-$b);
    }
    elseif($operator == '*'){
        echo($a*$b);
    }
    elseif($operator == '/'){
        
        if($a==0){
            echo"0 can not use is division ";
        }
        elseif($b==0){
            echo"0 can not use is division ";
        }
        
        else{
            echo($a/$b);
        }
        
    }
    
    

}
calculate(10,20,'+'); 
echo"<br>";
calculate(30,20,'-');
echo"<br>";
calculate(10,20,'*');
echo"<br>";
calculate(100,20,'/');
echo"<br>";
calculate(0,0,'/');
?>