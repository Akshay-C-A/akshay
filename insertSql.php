<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertSql.php" method="post">
        <label for="testfield">Text to Add: </label>
        <input type="text" name="testfield" size="30">
        <input type="submit" value="Insert Record" name="submit">
    </form>
</body>
</html>

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