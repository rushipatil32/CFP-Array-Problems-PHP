<?php
class ReverseString{
    function reverseFunction(){
        $string = readline("Enter a something: ");
        $count = strlen($string);
        echo "The reverse of string is: ";
        for ($i=$count-1; $i>=0; $i--){
            echo $string[$i];
        }

    }
}
$reverseFunction = new ReverseString();
$reverseFunction->reverseFunction();
?>