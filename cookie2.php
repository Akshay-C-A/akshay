<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="submit">Save Cookies</button><br><br>
    </form>

    <?php
        if (isset($_POST['submit']))
        {
            setcookie("username",$_POST["username"],time()+(86400*30),"/");
            echo "Cookie set : <br> username : ".$_COOKIE["username"] ;
        }

    ?>
</body>
</html>