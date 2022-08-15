<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

$arr = [1,2,3,4,5];

function miniMaxSum($arr) {
    sort($arr);
    $total = array_sum($arr);
    $newsum = [];
    for ($i=0; $i < count($arr); $i++) {
        $newsum[] = $total-$arr[$i];
    }
    $min = min($newsum);
    $max = max($newsum);

    echo $min.' '.$max;

}

miniMaxSum($arr);

