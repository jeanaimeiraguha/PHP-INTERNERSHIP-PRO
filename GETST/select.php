<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
   <table border="1">
     <tr>
          <th>Id</th>
          <th>UserName</th>
          <th>Adress</th>
          <th colspan="2">Actions</th>
     </tr>
     <?php
     include( 'conn.php');
     $select=mysqli_query($conn ,"SELECT * FROM user");
     while($row=mysqli_fetch_array($select)){
     
     ?>
     <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['username']?></td>
          <td><?php echo $row['address']?></td>
          <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
          <td><a href="#">Update</a></td>
     </tr>
     <?php
     }
     ?>
   </table>  
</body>
</html>