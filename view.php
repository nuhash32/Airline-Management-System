<?php 
$con=mysqli_connect('localhost','root','','flight');

$sql = "SELECT * FROM tb";
$sql = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html>
  <head>
  </head>
<body bgcolor="#E6E6FA">

<center><h1>View Flight Details</h1>
<center><a href="addingflight.php">Add New</a></center>
<br>

<table border="1px" style="width:70%" cellpadding="10">
  <tr>
    <td>Flight No.</td>
    <td>From</td>
    <td>To</td>
    <td>Departure</td>
    <td>Type</td>
    <td>Fare</td>
    <td>Action</td>
  </tr>
  <?php 
  while($result = mysqli_fetch_array($sql)){
  ?>
  <tr>
    <td><?php echo $result['Flight_no'] ?></td>
    <td><?php echo $result['From_p'] ?></td>
    <td><?php echo $result['To_p'] ?></td>
    <td><?php echo $result['Departure'] ?></td>
    <td><?php echo $result['Type'] ?></td>
    <td><?php echo $result['Fare'] ?></td>
    <td>
      <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a> 
      | 
      <a href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>
    </td>
  </tr>
  <?php
}
  ?>
  <tr>
    
  </tr>
</table>


  </body>
</body>
</html>
