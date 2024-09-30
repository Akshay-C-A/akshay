<?php
    $age = array("Harry"=>"21","Alice"=>"20","Meghna"=>"22","Bob"=>19);
    $age["Meghna"] = 28;
    asort($age);

    print_r($age);
    echo $age["Alice"];
?>
