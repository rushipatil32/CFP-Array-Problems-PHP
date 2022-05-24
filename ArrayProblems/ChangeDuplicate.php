<?php
class Replace
{
    function replaceDuplicate()
    {
        $array = array(1, 4, 5, 6, 6, 4, 7);
        $size = sizeof($array);

        for ($i = 0; $i < $size; $i++) {
            for ($j = $i + 1; $j < $size; $j++) {
                if ($array[$i] == $array[$j]) {
                    $array[$j] = 'R';
                }
            }
        }

        echo "\nArray after replacing with 'R'\n";
        for ($i = 0; $i < $size; $i++) {
            echo $array[$i] .  ", ";
        }
    }
}
$replace = new Replace;
$replace->replaceDuplicate();

?>
