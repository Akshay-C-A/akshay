<?php
    $str = "May god bless you all";
    $split = explode(" ",$str);
    foreach($split as $i)
    {
        echo "$i<br>";
    }
    
    $comb = implode(" ",$split);
    echo "<br>$comb";
?>