<?php 
	include_once 'config.php';
	include_once 'Nav-bar.php';
	$name='';
	$user=$_SESSION['User'];
	$email='';
	$res=mysqli_query($con,"Select * from user where username='$user'");
	if($res->num_rows > 1){
		echo 'database error';
	}
	elseif($res->num_rows == 1){
		$row=$res->fetch_assoc();
		$name=$row['name'];
		$user=$_SESSION['User'];
		$email=$row['email'];
		$profile=$row['profilephoto'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			

		}
		#profile{
				align-items: center;
				align-content: center;	
				text-align: center;
				width: 200px;
				position: fixed;
				left:42.5%;

			}
			#profile img{
				width: 200px;
				height: 200px;
				border-radius: 20px;
			}
			
	</style>
	<title></title>
</head>
<body >
	<div id="profile" >
	<H1 align="center">My Profile</H1>
	<?php echo '<img src="data:image;base64,'.base64_encode($profile).'">' ?><br>
	Name:<?php echo $name;?><br><hr>
	Email:<?php echo $email;?><br><hr>
	<form action="EditProfile.php" method="post"><input type="submit" value="Edit"></input></form>
</div>
</body>
</html>