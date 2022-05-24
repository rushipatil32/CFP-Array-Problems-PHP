<?php
class Duplicate
{
    function duplicateElements()
    {
        $arr = array(1, 5, 3, 4, 2, 7, 4, 5, 3);

        print("Duplicate elements in given array: ");
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] == $arr[$j])
                    echo $arr[$j], " ";
            }
        }
    }
}
$duplicate= new Duplicate;
$duplicate->duplicateElements();

?>