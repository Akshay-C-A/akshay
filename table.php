<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="boreder">
        <caption>Powers Table</caption>
        <tr>
            <th>Number</th>
            <th>Sqaure Root</th>
            <th>Square</th>
            <th>Cube</th>
            <th>Quad</th>
        </tr>

        <?php 
            for($number=1;$number<=10;$number++)
            {
                $root = sqrt($number);
                $square = pow($number,2);
                $cube = pow($number,3);
                $quad = pow($number,4);
                print("        
                    <tr>
                        <td>$number</td>
                        <td>$root</td>
                        <td>$square</td>
                        <td>$cube</td>
                        <td>$quad</td>
                    </tr>"
                );
            }
        ?>
    </table>
</body>
</html>