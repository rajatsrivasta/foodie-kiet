<?php
// Create connection
        $con=mysqli_connect("localhost","root"," ","life");

// Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }    

    $sql = "TRUNCATE TABLE verification";
    mysqli_query($con,$sql) or die("conection error");
?>