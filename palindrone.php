
<?php

function palindrome($strings) 
{
    $pal_array = [];
    foreach($strings as $string){
        if ($string == strrev($string))
        array_push($pal_array,$string);
    }
    $pal_count = count($pal_array); 
}
