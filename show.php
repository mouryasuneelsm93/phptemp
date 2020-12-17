<?php

if(isset($_POST["submit"]))
{
    $b=$_POST['num'];
    
    $a=$_POST["temp"];
   
        if($a=='Celsius')
        {
            $result =($b - 32) / (9 / 5);
            echo "$result";
            

        }
        else if($a=='Fahrenheit')
        {
            $result = ($b * (9 / 5) + 32);
            echo $result;
         }
    
}


?>