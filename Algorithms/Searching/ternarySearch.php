<?php

function ternarySearch($l, $r, $key, $ar)
{
    if ($r >= $l)
    {
        // Tìm mid1 và mid2
        $mid1 = (int)($l + ($r - $l) / 3);
        $mid2 = (int)($r - ($r - $l) / 3);

        if ($ar[$mid1] == $key)
        {
            return $mid1;
        }
        if ($ar[$mid2] == $key)
        {
            return $mid2;
        }

        if ($key < $ar[$mid1])
        {
            return ternarySearch($l, $mid1 - 1,
                $key, $ar);
        }
        else if ($key > $ar[$mid2])
        {
            return ternarySearch($mid2 + 1, $r,
                $key, $ar);
        }
        else
        {
            return ternarySearch($mid1 + 1, $mid2 - 1,
                $key, $ar);
        }
    }

    return -1;
}

$ar = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );

$l = 0;

$r = 9;

$key = 5;

$p = ternarySearch($l, $r, $key, $ar);

echo "Index of ", $key,
" is ", $p, "\n";

$key = 50;
$p = ternarySearch($l, $r, $key, $ar);

// Print the result
echo "Index of ", $key,
" is ", $p, "\n";

