<?php
    $str1 = "computer";
    $patt = "/put/";

    if(preg_match($patt,$str1))
    {
        echo "Pattern $patt is found in $str1";
    }
    else
    {
        echo "Pattern $patt is not found in $str1";
    }

    echo "<br><br>" ;

    if(preg_match_all($patt,$str1,$match))
    {
        echo "Pattern $patt is found in $str1 ".count($match[0]) ;
    }
    else
    {
        echo "Pattern $patt is not found in $str1";
    }
?>