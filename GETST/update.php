<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
    <?php
    include('conn.php');
    $id=$_GET['id'];
    $select=mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
    $row=mysqli_fetch_array($select);
    ?> 
     <form action="insert.php" method="post">
     id<input type="text" name="id"> <br>
     username<input type="text" name="username"> <br>
     address<input type="text" name="address"> <br>
     
<button name="submit">Add New</button></form>  
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['submit'])) {
     # code...
$id=$_POST['id'];
$username=$_POST['username'];
$address=$_POST['address'];

$insert=mysqli_query($conn ,"UPDATE user where id='$id', username='$username', `address`='$address'WHERE id='$id'");
if ($update) {
     # code...
     // echo "data Inserted successfully";
     header('location:select.php');
}
else{
     echo "failed";
}
}
?>

