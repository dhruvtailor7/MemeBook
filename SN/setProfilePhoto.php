<?php
	include_once 'config.php';
	include_once 'nav-bar.php';
	//print_r($_FILES);
	if(isset($_FILES['img1'])){
		$user = $_SESSION['User'];
		$file = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
		//echo "Insert into user(photo) values('$file') where username='".$user."'";
		$stmt = mysqli_prepare($con,"Update user set profilephoto='$file' where username='".$user."'") or die($con->error);
		mysqli_execute($stmt);
		//echo $file;
		header("Location:Profile.php");
	}	
	else{
		//print_r($_FILES);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#profile{
				width: 300px;
				position: fixed;
				left:40%;
				border: 2px solid black;
			}
	</style>
</head>
<body>
	<h2 align="center">Set Profile Photo</h2>
	<div id="profile"><form action="setProfilePhoto.php" method="post" enctype="multipart/form-data">
		<table>
			<tr><td>Insert Image:</td><td><input type="file" name="img1" accept="Image/*"></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" value="Upload"></td></tr>
		</table>
	</form>
</div>
</body>
</html>