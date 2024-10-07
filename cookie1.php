<?php
    $cookie_name = "user";
    $cookie_value = "admin123";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
    // setcookie($cookie_name,$cookie_value,time()+(5),"/");
    // To delete a cookie
    // setcookie($cookie_name,"",time()-3600,"/");  

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
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie named $cookie_name is not set!";
        }
        else{
            echo "Cookie named $cookie_name is set <br>";
            echo "Value is : $_COOKIE[$cookie_name]";
        }
    ?>
</body>
</html>