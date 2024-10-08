<?php
    session_start();
    if (isset($_SESSION['visit_count']))
    {
        $_SESSION['visit_count'] += 1;
    }
    else{
        $_SESSION['visit_count'] = 1;
    }
?>

<?php
    if (isset($_POST['reset'])) {
        reset_count();
    }

    function reset_count() {
        $_SESSION['visit_count'] = 1;
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
    <h1>Visiter Count</h1>
    <?php
        echo "You have visited this website ".$_SESSION['visit_count']." number of times."
    ?>  
    <br><br>
    <form method="POST">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>