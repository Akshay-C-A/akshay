<?php
    $array1= array('a','1','2','3','4');
    $array2= array('a','3');

    if(array_intersect($array2,$array1) === $array2)
    {
        echo "is a subset";
    }
    else{
        echo "not a subset";
    }
?>