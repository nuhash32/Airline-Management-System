<?php
  $con=mysqli_connect('localhost','root','','flight');

  if (isset($_GET['id'])) {
  	$id = $_GET['id'];
  	$sql = "DELETE FROM tb WHERE id='$id' ";
  	$result = mysqli_query($con, $sql);
  	header("location:view.php");
  }


?>