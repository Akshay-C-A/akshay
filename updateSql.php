<?php
$conn = mysqli_connect("localhost", "root", "", "test1");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE testtable SET testField = 'Hai' WHERE id = 15";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} 
else {
    echo "Error updating record: " . mysqli_error($conn);
}

$sql = "SELECT * FROM testTable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' width='300'>
            <tr>
                <th>id</th>
                <th>My Message</th>
            </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["testField"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
