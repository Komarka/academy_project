<?php

    for($i = 0; $i < 10; $i++)
        $a[] = rand(1, 100);
    
    
    $min = $a[0]; $index_min = 0;
    $max = $a[0]; $index_max = 0;
 
    for($i = 1; $i < 10; $i++) {    
        if($min > $a[$i]) {
            $min = $a[$i];
            $index_min = $i;
        }
 
        if($max < $a[$i]) {
            $max = $a[$i];
            $index_max = $i;
        }
    }
 
    echo 'Min: ' . $min . ', Max: ' . $max;
 
    $a[$index_min] = $max;
    $a[$index_max] = $min;
