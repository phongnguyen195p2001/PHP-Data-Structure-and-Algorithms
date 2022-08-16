<?php
require("sort.php");
$function_name = $argv[1];

// Hàm random array
$sort = new Sort();
$array = range(0, 1000000);
shuffle($array);
$array = array_slice($array ,0,1000000);

$start = microtime(true);
implode(', ', $sort->$function_name($array)) . "\n";
$time_elapsed_secs = microtime(true) - $start;
echo 'Run time: ' . $time_elapsed_secs . 's';
