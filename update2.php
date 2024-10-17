<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateSqlForm.php" method="post">
        <label for="">Enter the id to update : </label>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "test1");
            if($conn)
            {
                $sql = "SELECT * FROM testtable";
                $res= mysqli_query($conn,$sql);

                if(mysqli_num_rows($res)>0)
                {
                    echo "<select name = selectedId>";
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        echo "<option value='".$id."'>".$id."</option>";
                    }
                    echo "</select>";
                }
            }
            else
            {
                die("Connection failed : ".mysqli_connect_error());
            }
        ?>
        <br><br>
        <label for="">Enter the updated Value</label>
        <input type="text" name="updateval"><br><br>
        <input type="submit" value="Update Record">
    </form>

    
</body>
</html>
