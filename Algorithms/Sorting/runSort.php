<?php
//require("helper.php");
require("sort.php");
$function_name = $argv[1];
//$helper = new helper();
$sort = new Sort();
$array = range(0, 1000000);
shuffle($array);
$array = array_slice($array ,0,1000000);

$start = microtime(true);
implode(', ', $sort->$function_name($array)) . "\n";
//$radix = $sort->radixSort($array);

////$merge = $sort->meeSort($array);
//var_dump($argv[1]);
//var_dump($argv[2]);
//var_dump($argv[3]);
//var_dump($argv[4]);
//switch ($argv[1]) {
//    case 1:
//        implode(', ', $sort->bubbleSort($array)) . "\n";
//        break;
//    case 2:
//        implode(', ', $sort->mergeSort($array)) . "\n";
//        break;
//    case 3:
//        implode(', ', $sort->radixSort($array)) . "\n";
//        break;
//    case 4:
//        implode(', ', $sort->bucketSort($array)) . "\n";
//        break;
//    case 5:
//        implode(', ', $sort->heapSort($array)) . "\n";
//        break;
//    case 6:
//        implode(', ', $sort->countingSort($array)) . "\n";
//        break;
//    case 7:
//        implode(', ', $sort->insertionSort($array)) . "\n";
//        break;
//    case 8:
//        implode(', ', $sort->selectionSort($array)) . "\n";
//        break;
//    case 9:
//        implode(', ', $sort->quickSort($array)) . "\n";
//        break;
//}
$time_elapsed_secs = microtime(true) - $start;
echo 'Run time: ' . $time_elapsed_secs . 's';
