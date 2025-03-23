<?php
include('conn.php');
$id=$_POST['id'];
$delete=mysqli_query($conn, "DELETE FROM user WHERE id='$id'");
if ($delete) {
   echo "deleted";
}
else{
     echo "Failed";
}

?>