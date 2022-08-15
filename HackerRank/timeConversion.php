<?php

/*
* Complete the 'timeConversion' function below.
*
* The function is expected to return a STRING.
* The function accepts STRING s as parameter.
*/

$s = "07:05:45PM";

function timeConversion($s) {
    $now = date("H:i:s", strtotime($s));
    // $timestring = $now->format('G:i:s');
    return $now;
}

echo timeConversion($s);
