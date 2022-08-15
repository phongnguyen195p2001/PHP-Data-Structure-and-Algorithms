<?php

/*
     * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

$candles = [4,4,1,3];

function birthdayCakeCandles($candles) {
    $m=max($candles);
    $a=array_count_values($candles);
    return $a[$m];
}

echo birthdayCakeCandles($candles);
