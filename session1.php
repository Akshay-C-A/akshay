<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["uname"] = "admin";  //adding session variables
        $_SESSION["pwd"] = "admin123";
        echo "Session variables are set";
        echo "<br><br>welcome ". $_SESSION['uname'];  
        $_SESSION["uname"] = "administrator";  //modify session
        echo "<br><br>welcome ". $_SESSION['uname'];  

        session_unset();
      //  echo "<br><br>welcome ". $_SESSION['uname'];  
    ?>
    <br><br>
    <a href="http://localhost/dashboard/akshay/cookie2.php">click Here</a>
    <br><br>
    <a href="http://localhost/dashboard/akshay/logout.php">Logout</a>
</body>
</html>