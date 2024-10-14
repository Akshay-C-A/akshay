<?php
    //METHOD 1

    // $conn = mysqli_connect("localhost","root","","test1");
    // if($conn)
    // {
    //     echo "connected to test1 database successfully";
    // }
    // else{
    //     die("Connection Failed : ".mysqli_connect_error());
    // }

    //METHOD 2

    $conn = new mysqli("localhost","root","","test1");
    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else{
        echo "connected to test1 database successfully :]";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sqlconnection.php" method="post"></form>
</body>
</html>