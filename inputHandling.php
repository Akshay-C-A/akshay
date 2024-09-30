<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Test Hello Message</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit']))
        {
            $myName = $_POST['myName'];
            echo "<br> 
            <h1> Hello ".$myName."! Welcome to PHP World </h1>";
        }
    ?>

    <p>Enter the name in the form and hit submit button</p><br>
    <form action="inputHandling.php" method="post">
        <label for="myName">Enter Name</label>
        <input type="text" name="myName">
        <br><br>
        <input type="submit" value="Greet Me" name="submit">
        
    </form>
</body>
</html>