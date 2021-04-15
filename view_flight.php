<?php 

$con=mysqli_connect('localhost','root','','flight');

$sql = "SELECT * FROM tb";
$sql = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">

<center><h2>View Flight Details</h2>

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
      <a href="booking.php?flight=<?php echo $result['Flight_no'] ?>">Booking</a> 
    </td>
  </tr>
  <?php
}
  ?>
  <tr>
    
  </tr>
</table>

</body>
</html>
