<?php
include_once 'config.php';
$user=htmlspecialchars($_REQUEST['username']);
$pass=htmlspecialchars($_REQUEST['password']);
$res=mysqli_query($con,"Select * from User where username='$user' and password='$pass'");
if($res->num_rows > 1){
	$_SESSION['error']='Database Error';
}
elseif ($res->num_rows == 1) {
	$row = $res->fetch_assoc();
	$_SESSION['User']=$user;
	$_SESSION['error']="";
	$_SESSION['id']=$row['userid'];
	$stmt=mysqli_prepare($con,"Update user set Active=1 where username='$user'");
	mysqli_execute($stmt);
	header("Location:FetchNews.php");
}
else{
	$_SESSION['error']="Wrong Username/Password or Please Logout from another pc's.";
	header("Location:Login.php");
}
?>