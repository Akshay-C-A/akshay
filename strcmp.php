<?php
    $str1 = "apple";
    $str2 = "bananas";
    $res = strcmp($str1,$str2);

    if($res < 0)
    {
        echo "$str1 precedes $str2 alphebetically";
    }
    elseif($res == 0)
    {
        echo "$str1 and $str2 are equal";
    }
    else
    {
        echo "$str1 follows $str2 alphebetically";
    }


?>