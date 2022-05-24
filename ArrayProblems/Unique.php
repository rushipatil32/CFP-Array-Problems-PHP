<?php
class UniqueElement
{

    function unique()
    {
        $array = array(6, 8, 5, 4, 9, 7, 4, 6, 8);
        $size = sizeof($array);
        for ($i = 0; $i < $size; $i++) {

            for ($j = 0; $j < $i; $j++)
                if ($array[$i] == $array[$j])
                    break;


            if ($i == $j)
                echo $array[$i], " ";
        }
    }
}
$uniqueElement = new UniqueElement;
$uniqueElement->unique();

?>