<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="patt.php" method="post">
        <input type="text" name="str1" placeholder="Enter String"><br><br>
        <input type="text" name = "pattern" placeholder="Enter Pattern"><br><br>
        <input type="submit" value="Search my Pattern" name="submit"><br><br>
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $str1 = $_POST['str1'];
            $pattern = '/'.$_POST['pattern'].'/';
            if(preg_match($pattern,$str1))
            {
                echo "Pattern $pattern is found in $str1";
            }
            else
            {
                echo "Pattern $pattern is not found in $str1";
            }
        }
    ?>
</body>
</html>