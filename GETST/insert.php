<?php
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$insert=mysqli_query($conn ,"INSERT INTO users VALUES('','$username','$password')")
;
if ($insert) {
     # code...
     echo "data Inserted successfully";
}
else{
     echo "failed";
}
?>