<?php
  $con=mysqli_connect('localhost','root','','flight');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb WHERE id = '$id' ";
    $sql = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($sql);
  }
  

  $message = "";
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $Flight_No = $_POST['flightno'];
    $From = $_POST['from'];
    $To=$_POST['to'];
    $Departure = $_POST['dtime'];
    $Type = $_POST['type'];
    $Fare = $_POST['fare'];
    $sql = "UPDATE `tb` SET `Flight_no`='$Flight_No',`From_p`='$From',`To_p`='$To',`Departure`='$Departure',`Type`='$Type',`Fare`='$Fare' WHERE id = '$id' ";

  if(mysqli_query($con,$sql))
  {
    header("location:view.php");
  }
  else
  $message = 'Not inserted';
}
  
?>


<!DOCTYPE html>
<html>
<body>

<center><h2>Update Flight Details</h2>

<form action="" method="post">
<table cellpadding="10">
<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
	<tr>
		<td>Flight No:</td>
		<td><input type="text" name="flightno" value="<?php echo $result['Flight_no'] ?>"></td>
	</tr>
	<tr>
		<td>From: </td>
		<td><input type="text" name="from" value="<?php echo $result['From_p'] ?>"></td>
	</tr>
	<tr>
		<td>To: </td>
		<td><input type="text" name="to" value="<?php echo $result['To_p'] ?>"></td>
	</tr>
	<tr>
		<td>Departure Time: </td>
		<td><input type="text" name="dtime" value="<?php echo $result['Departure'] ?>"></td>
	</tr>
	<tr>
	<td>Type: </td>
		<td><input type="radio" name="type" value="Economy" <?= $result['Type'] =='Economy'?'checked':'' ?> > Economy <input type="radio" name="type" value="Business" <?= $result['Type'] =='Business'?'checked':'' ?>> Business</td>
	</tr>
	<tr>
		<td>Fare:</td>
		<td><input type="text" name="fare" value="<?php echo $result['Fare'] ?>"></td>
	</tr>
</table>
   <br><br>
  <center>
    <button type="submit" name="submit">Update</Add></center>
    <p><?= $message ?></p>
  </center>
</form> 

</body>
</html>
