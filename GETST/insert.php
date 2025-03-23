<?php
include 'conn.php';
if (isset($_POST['submit'])) {
     # code...
// $id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$insert=mysqli_query($conn ,"INSERT INTO `users`(id, username, `password`) VALUES('','$username','$password')");
if ($insert) {
     # code...
     echo "data Inserted successfully";
}
else{
     echo "failed";
}
}
?>

