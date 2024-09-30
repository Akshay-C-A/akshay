<?php
    $mon = array("Jan","Feb","Mar");
    $rem = "Mar";
    if(($ind=array_search($rem,$mon))!=false)
    {
        unset($mon[$ind]);
    }
    print_r($mon);
?>