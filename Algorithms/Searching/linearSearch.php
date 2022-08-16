<?php
function search($arr, $x)
{
    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($arr[$i] == $x) return $i;
    }
    return -1;
}

$arr = array(4,6,8,4,3,5,7,0,54,2);
echo search($arr, 2);
