<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form action="uniQes2.php" method="post">
        <label for="number">Enter a number : </label>
        <input type="number" name="number" id="number" required>
        <button type="submit" name="submit" value="submit">Check</button>
    </form>

    <?php
        function isPrime($num)
        {
            if($num == 0 || $num == 1)
            {
                return false;
            }

            for($i=2;$i<sqrt($num);$i++)
            {
                if($num%$i == 0)
                {
                    return false;
                }
            }
            return true;
        }

        if(isset($_POST['submit']))
        {
            $num =$_POST['number'];
            if(isPrime($num))
            {
                echo "<h3>Prime</h3>";
            }
            else{
                echo "<h3>Not Prime</h3>";
            }
        }
    ?>
</body>
</html>