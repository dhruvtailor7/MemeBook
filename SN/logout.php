<?php 
	include_once 'config.php';
	$sql="Update user set Active=0 where username='".$_SESSION['User']."'";
	$stmt=mysqli_prepare($con,$sql) or dir($con->error);
	mysqli_execute($stmt);
	session_destroy();

	header("Location:Login.php");
?>