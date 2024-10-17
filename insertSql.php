

<?php
    $conn = mysqli_connect("localhost","root","","test1");
    if($conn)
    {
        echo "Connection successful <br>";
        $sql = "INSERT INTO testtable(testField) VALUES ('$_POST[testfield]')";
        $res = mysqli_query($conn,$sql);
        if($res)
        {
            echo "Data Inserted Successfully! <br>";
        }
        else
        {
            die("Error: ".mysqli_error($conn));
        }
    }
    else
    {
        die("Connection Failed : ".mysqli_connect_error());
    }
    mysqli_close($conn);
?>




