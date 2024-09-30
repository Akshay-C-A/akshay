<?php 
    $mon = array(
        "Jan" => "first",
        "Feb" => "second",
        "March" => "third",
    );


    foreach ($mon as $monKey => $monValue){
        echo "<h3>$monKey is the $monValue month</h3><br>";
    }

    print_r($mon);

?>