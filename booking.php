<?php
  $message = "";
  $con=mysqli_connect('localhost','root','','flight');

  $flight_no = $_GET['flight'];

  if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['number'];
    $qty = $_POST['qty'];

    $sql = "insert into booking values ('','$name','$email','$mobile_no',
    '$qty','$flight_no')";

  if(mysqli_query($con,$sql))
  {
    header("location:mss.php");
  }
  else
  $message = 'Not inserted';
}
  
?>


<!DOCTYPE html>
<html>

<body bgcolor="#E6E6FA">

<center><h1>Booking For Flight</h1>

<form method="post">

<table style="width:20%" cellpadding="10">
  <tr>
    <td>Visitor Name:</td>
    <td><input type="text" name="name" required></td>
  </tr>
  <tr>
    <td>Visitor Email:</td>
    <td><input type="email" name="email" required></td>
  </tr>
  <tr>
    <td>Mobile Number:</td>
    <td><input type="number" name="number" required></td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="number" name="qty" required></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="Submit" style="padding:10px 20px"></td>
  </tr>
  
</table>
</form>

</body>
</html>
