<?php
require("helper.php");

class Sort
{
    // Bubble Sort

    public function bubbleSort(array $array)
    {
        $number = count($array);
        for ($i = 0; $i < $number - 1; $i++) {
            for ($j = $i + 1; $j < $number; $j++) {
                if ($array[$j] < $array[$i]) {
                    $tmp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $tmp;
                }
            }
        }
        return $array;
    }

    // Selection Sort

    public function selectionSort(array $array)
    {
        $number = count($array);
        for ($i = 0; $i < $number; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $number; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }

            if ($i !== $min) {
                $tmp = $array[$i];
                $array[$i] = $array[$min];
                $array[$min] = $tmp;
            }
        }
        return $array;
    }

    // Insertion Sort

    public function insertionSort(array $array)
    {
        foreach ($array as $i => $value) {
            for ($j = $i; $j > 0 && $array[$j - 1] > $value; --$j) {
                $array[$j] = $array[$j - 1];
            }
            $array[$j] = $value;
        }
        return $array;
    }

    // Merge Sort

    public function merge(array $left, array $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

    public function mergeSort(array $array)
    {
        if (count($array) == 1) return $array;
        $mid = count($array) / 2;
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = $this->mergeSort($left);
        $right = $this->mergeSort($right);
        return $this->merge($left, $right);
    }

    // Quick Sort

    function quickSort($array)
    {
        if (count($array) <= 1) {
            return $array;
        } else {
            $pivot = $array[0];
            $left = array();
            $right = array();
            for ($i = 1; $i < count($array); $i++) {
                if ($array[$i] < $pivot) {
                    $left[] = $array[$i];
                } else {
                    $right[] = $array[$i];
                }
            }
            return array_merge($this->quickSort($left), array($pivot), $this->quickSort($right));
        }
    }

    // Counting Sort

    public function countingSort($array){
        $count = array();
        foreach ($array as $v) {
            $count[$v] = isset($count[$v]) ? $count[$v] + 1 : 1;
        }
        $sorted = array();
        $min = min($array);
        $max = max($array);
        for ($i=$min; $i<=$max; $i++) {
            if (isset($count[$i])) {
                for ($j=0; $j<$count[$i]; $j++) {
                    $sorted[] = $i;
                }
            }
        }
        return $sorted;
    }

    // Radix Sort

    function radixSort(array $array) {

        $n = count($array);
        if ($n <= 0)
            return;

        $min = min($array);
        $max = max($array);
        $arr = [];

        $len = $max - $min + 1;
        $arr = array_fill($min, $len, 0);

        foreach ($array as $key => $value) {
            $arr[$value] ++;
        }

        $array = [];
        foreach ($arr as $key => $value) {
            if ($value == 1) {
                $array[] = $key;
            } else {
                while ($value--) {
                    $array[] = $key;
                }
            }
        }
        return $array;
    }

    // Bucket Sort

    function bucketSort(array $array) {

        $n = count($array);
        if ($n <= 0)
            return;

        $min = min($array);
        $max = max($array);
        $bucket = [];
        $bLen = $max - $min + 1;

        $bucket = array_fill(0, $bLen, []);

        for ($i = 0; $i < $n; $i++) {
            array_push($bucket[$array[$i] - $min], $array[$i]);
        }

        $k = 0;
        for ($i = 0; $i < $bLen; $i++) {
            $bCount = count($bucket[$i]);

            for ($j = 0; $j < $bCount; $j++) {
                $array[$k] = $bucket[$i][$j];
                $k++;
            }
        }
        return $array;
    }

    // Heap Sort
    function heapSort(array $array) {
        $length = count($array);
        $this->buildHeap($array);
        $heapSize = $length - 1;
        for ($i = $heapSize; $i >= 0; $i--) {
            $tmp = $array[0];
            $array[0] = $array[$heapSize];
            $array[$heapSize] = $tmp;
            $heapSize--;
            $this->heapify($array, 0, $heapSize);
        }
        return $array;
    }

    function buildHeap(array $array) {
        $length = count($array);
        $heapSize = $length - 1;
        for ($i = ($length / 2); $i >= 0; $i--) {
            $this->heapify($array, $i, $heapSize);
        }
    }

    function heapify(array &$array, int $i, int $heapSize) {
        $largest = $i;
        $l = 2 * $i + 1;
        $r = 2 * $i + 2;
        if ($l <= $heapSize && $array[$l] > $array[$i]) {
            $largest = $l;
        }

        if ($r <= $heapSize && $array[$r] > $array[$largest]) {
            $largest = $r;
        }

        if ($largest != $i) {
            $tmp = $array[$i];
            $array[$i] = $array[$largest];
            $array[$largest] = $tmp;
            $this->heapify($array, $largest, $heapSize);
        }
    }
}

//$sort = new Sort();
//$test_array = array(55, -5, 7, 2, 5, -4, 1);
//echo "Original Array : ";
//echo implode(', ', $test_array);
//echo "\nSorted Array :";
//echo implode(', ', $sort->mergeSort($test_array)) . "\n";
//$newArray = $sort->countingSort($test_array);
//for($i = 0; $i < count($newArray); $i++) {
//    echo $newArray[$i] . ", ";
//}