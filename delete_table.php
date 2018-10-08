<?php
$dbc = mysqli_connect("localhost","root","")
or die('Error connecting to MySQL server');
mysqli_select_db($dbc,'life');

if(isset($_POST['delete'])){
$query = "TRUNCATE TABLE verification "; // replace yourTable with one to delete
$result = mysqli_query($dbc,$query)
or die('Error deleting table.');
}
else {
echo "Sorry";
}
?> 

