<?php

$conn = mysqli_connect("localhost", "root", "", "test1");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE testil (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(75),
    mark INT
)";

$res = mysqli_query($conn, $sql);


if ($res) {
    echo "Table 'testil' successfully created.";
} else {
    printf("Could not create table: %s\n", mysqli_error($conn));
}

// Close the database connection
mysqli_close($conn);
?>
