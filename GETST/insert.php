<?php
include 'conn.php';
if(isset($_POST['submit'])) {
     # code...
$id=$_POST['id'];
$username=$_POST['username'];
$address=$_POST['address'];

$insert=mysqli_query($conn ,"INSERT INTO `user`(id, username, `address`) VALUES('$id','$username','$address')");
if ($insert) {
     # code...
     echo "data Inserted successfully";
}
else{
     echo "failed";
}
}
?>

