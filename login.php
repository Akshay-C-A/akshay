<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
        $error = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST['username']) || empty($_POST['password'])) {
                $error = 'Please enter username and password.';
            } 
            else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($username === 'admin' && $password === 'admin123') {
                    header('Location: welcome.php');
                    exit();
                } 
                else {
                    $error = 'Invalid username or password.';
                }
            }
        }
        if (isset($_POST['cancel'])) {
            header('Location: login.php');
            exit();
        }
    ?>


    <h2>Login Form</h2>
    <?php if ($error) echo '<div style="color: red;">' . $error . '</div>'; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="submit">Login</button>
        <button type="submit" name="cancel">Cancel</button>
    </form>

</body>
</html>
