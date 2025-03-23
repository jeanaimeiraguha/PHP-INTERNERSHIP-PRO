<?php
$conn=mysqli_connect('localhost','root','','crud');
if ($conn) {
     # code...
     echo "connected";
}
else{
     echo "failed to be connected";
}
?>