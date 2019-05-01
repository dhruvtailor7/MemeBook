<?php 
	include_once 'config.php';
	$user=htmlspecialchars($_REQUEST['username']);
	$pass=htmlspecialchars($_REQUEST['password']);
	$repass=htmlspecialchars($_REQUEST['repassword']);
	$name=htmlspecialchars($_REQUEST['name']);
	$email=htmlspecialchars($_REQUEST['email']);
	if(($_REQUEST['username'])=="" || ($_REQUEST['password'])==""){
		$_SESSION['errorR']="UserName cant be empty";
		header("Location:Register.php");
	}
	else{
		$res=mysqli_query($con,"Select count(username) from user where username='$user'");
		$row=$res->fetch_assoc();
		if($row['count(username)'] == 0){
			if($pass == $repass && $pass!=""){
				$stmt=mysqli_prepare($con,"Insert into user(username,password,name,email,Active) values('$user','$pass','$name','$email',1)") or die($con->error);

				mysqli_execute($stmt);
				$_SESSION['User']=$user;
				$res=mysqli_query($con,"Select userid from user where username='$user'");
				$res = $res->fetch_assoc();
				$_SESSION['id']=$res['userid'];
				header('Location:setProfilePhoto.php?user='.$user);
				//header('Location:FetchNews.php');
			}
			else{
				$_SESSION['errorR']="password didn't match.";
				header("Location:Register.php");
			}
	}
	else{
		$res=mysqli_query($con,"Select count(username) from user where username='$user'");
		print_r($res);	
		print_r();
		$_SESSION['errorR']="Username exist.";
		header("Location:Register.php");
	}
}
?>