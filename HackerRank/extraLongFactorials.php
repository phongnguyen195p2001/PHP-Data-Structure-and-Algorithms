<?php

/*
 * Complete the 'extraLongFactorials' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function extraLongFactorials($n) {
    $answer = 1;

    while ($n >= 1) {
        $answer = bcmul($answer, $n);
        $n --;
    }

    echo $answer;

}

$n = intval(trim(fgets(STDIN)));

extraLongFactorials($n);
