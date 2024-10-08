<?php
    session_start();
    if (isset($_POST['submit']))
    {
        if( ($_POST['username']!="") || ($_POST['password']!="") )
        {
            $inputUname = $_POST['username'];
            $inputPass = $_POST['password'];
        }
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
    <h2>Login Form</h2>
    <form method="post" action="session3.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="submit">Submit</button><br><br>
    </form>
</body>
</html>