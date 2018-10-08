<?php

include "k.php"; //Connect to Database

$deleterecords = "TRUNCATE TABLE verificaton"; //empty the table of its current records
mysqli_query( $conn, $deleterecords );

?>
