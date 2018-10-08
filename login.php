 <?php 
session_start();

$db = mysqli_connect('localhost','root','','shopping_cart');

 $library = mysqli_real_escape_string($db, $_POST['library']);
 $password = mysqli_real_escape_string($db, $_POST['password_1']);
 
$password=md5($password);
 


$q = "SELECT * from users where library = '$library' AND password = '$password'  ";

$result = mysqli_query($db, $q);
$num = mysqli_num_rows($result);


    if ( $num == 1) {
   
 $name="SELECT name from users where library ='$library' ";
    mysqli_query($db,$name);
    $_SESSION['name'] = $a;
    
     header('location:foodie.php');
      exit();
    }
    else{
     echo "password is Wrong ";
       exit();
}
?>