<?php 

if(isset($_POST['Submit'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	if($username=='nuhash' && $pass=='12345'){
		header('location:adminchoice.php');
	}
	else
		header('location:admin.php');

}

?> 