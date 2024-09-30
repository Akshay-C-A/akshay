<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <br>
    <form action="armstrong.php" method="post">
        <label for="num">Enter a number : </label>
        <input type="text" name="number">
        <input type="submit" value="check" name="check">
    </form>
    <?php

        if(isset($_POST['check']))
        {
            $num =$_POST['number'];
            $power = strlen($num);
            $num2=0;
            for($i=0;$i<$power;$i++)
            {
                
            }
            

        }
    ?>
</body>
</html>