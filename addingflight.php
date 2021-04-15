<?php
  $message = "";
  $con=mysqli_connect('localhost','root','','flight');
  if(isset($_POST['submit'])){
    $Flight_No = $_POST['flightno'];
    $From = $_POST['from'];
    $To=$_POST['to'];
    $Departure = $_POST['dtime'];
    $Type = $_POST['type'];
    $Fare = $_POST['fare'];
    $sql = "insert into tb values ('','$Flight_No','$From','$To',
    '$Departure','$Type','$Fare')";

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

<center><h2>Adding Flight Details</h2>

<form action="" method="post">
  Flight No: <input type="text" name="flightno"><br>
  <br>
  From: <input type="text" name="from"><br>
  <br>
  To: <input type="text" name="to"><br>
  <br>
  Departure Time: <input type="text" name="dtime"><br>
  <br>
 Type: <input type="radio" name="type" value="Economy" checked> Economy<br>
  <input type="radio" name="type" value="Business"> Business<br>
  
  <br>
  Fare: <input type="text" name="fare">
  <br><br><br>
  <center>
    <button type="submit" name="submit">Submit</Add></center>
    <p><?= $message ?></p>
  </center>
</form> 

</body>
</html>
