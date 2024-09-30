<?php
    function writeMsg()
    {
        echo "Hello World<br><br>";
    }

    writeMsg();
?>

<?php   
    declare(strict_types = 1);
    function family($fname, $year)
    {
        echo "<br>$fname born in $year";
    }

    family("Peter",1956);
    family("Joe","1942");
    family("Quagmire","1956");

?>
