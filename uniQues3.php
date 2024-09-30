<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Word Counter</h1>
    <form action="uniQues3.php" method="post">
        <label for="number">Enter the string : </label>
        <input type="text" name="str" id="str">
        <button type="submit" name="submit" value="submit">Check</button>
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $sent =$_POST['str'];
            echo "<h3>".str_word_count($sent)."</h3>";
        }
    ?>
</body>
</html>