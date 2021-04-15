<?php 
$con=mysqli_connect('localhost','root','','flight');

$sql = "SELECT * FROM booking";
$sql = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">

<center><h1>View Booking Details</h1>
<br>

<table border="1px" style="width:70%" cellpadding="10">
  <tr>
    <td>Sl</td>
    <td>Name</td>
    <td>Email</td>
    <td>Mobile No</td>
    <td>Quantity</td>
    <td>Flight No</td>
  </tr>
  <?php
  $sl = 1; 
  while($result = mysqli_fetch_array($sql)){
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $result['name'] ?></td>
    <td><?php echo $result['email'] ?></td>
    <td><?php echo $result['mobile_no'] ?></td>
    <td><?php echo $result['quantity'] ?></td>
    <td><?php echo $result['flight_no'] ?></td>
  </tr>
  <?php
}
  ?>
  <tr>
    
  </tr>
</table>

</body>
</html>
