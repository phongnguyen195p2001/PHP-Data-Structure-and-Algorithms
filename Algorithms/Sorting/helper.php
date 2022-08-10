<?php

class helper
{
    function random_array(){
        $random_number_array = range(0, 1000000);
        shuffle($random_number_array );
        $random_number_array = array_slice($random_number_array ,0,1000000);
        return $random_number_array;
    }
}