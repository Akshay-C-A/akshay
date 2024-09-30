<?php
    $fruits = array("Orange","Apple","Grape","Banana");
    unset($fruits[2]);
    sort($fruits);
    rsort($fruits);

    foreach($fruits as $i){
        echo "$i<br>";
    }

    $age = array("Peter"=>"45","Ben"=>"47","Joe"=>"43");
    // asort($age);
    ksort($age);
    foreach($age as $i => $ival)
    {
        echo "Key = $i Value = $ival<br>";
    }
?>