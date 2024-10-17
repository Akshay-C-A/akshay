<?php
    // $conn = mysqli_connect("localhost", "root", "", "test1");

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // else
    // {
    //     echo "Connection Successful<br>";
    //     $sql = "SELECT * FROM testtable";
    //     $res = mysqli_query($conn, $sql);
        
    //     if ($res) {
    //         echo "Selection Successful<br>";
    //         if(mysqli_num_rows($res)>0)
    //         {
    //             echo "<table border='border' width='300'>
    //                 <tr>
    //                     <th>ID</th>
    //                     <th>Message</th>
    //                 </tr>";

    //             while($row = mysqli_fetch_assoc($res))
    //             {
    //                 echo "<tr>
    //                     <td>".$row["id"]."</td>
    //                     <td>".$row["testField"]."</td>
    //                 </tr>";
    //             }
    //             echo "</table>";
    //         }
    //         else
    //         {
    //             echo "0 results";
    //         }
    //     } 
    //     else 
    //     {
    //         printf("Could not do Selection: %s\n", mysqli_error($conn));
    //     }
        
    // }
    // mysqli_close($conn);


    $conn = mysqli_connect("localhost", "root", "", "test1");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        echo "Connection Successful<br>";
        $sql = "SELECT * FROM testtable";
        $res = mysqli_query($conn, $sql);
        
        if ($res) {
            echo "Selection Successful<br>";
            if(mysqli_num_rows($res)>0)
            {
                echo "<......ID......Message......";

                while($row = mysqli_fetch_assoc($res))
                {
                    echo ".....$row["id"].".....
                        <td>".$row["testField"]."</td>
                    </tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 results";
            }
        } 
        else 
        {
            printf("Could not do Selection: %s\n", mysqli_error($conn));
        }
        
    }
    mysqli_close($conn);
?>
