<?php
    $a= preg_match("/ca+t/","caaaaaaaat");
    echo "$a";

    $b = preg_match("/[0-9]{2}-[0-9]{1}-[0-9]{3}-[0-9]{4}/","64-9-555-1234");
    echo "<br>$b";
?>