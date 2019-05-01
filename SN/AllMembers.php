<?php
include_once 'config.php';
include_once 'Nav-bar.php';
$user=$_SESSION['User'];
$res=mysqli_query($con,"Select * from user;");

	# code...
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	</style>
</head>
<body>
	<h3 align="center">All Members</h3>
	<div id="profile">
		
		<dl>
		<?php while ($row = $res->fetch_assoc()) {?>
		<dt><b><a href=<?php echo "ViewProfile.php?user=".$row['username']; ?>><?php echo $row['username']; ?></a></b></dt>
		<dd>Name:<?php echo $row['name']."<br>E-mail:".$row['email']; ?></dd>
		<a href="SendMessage.php?to=<?php echo $row['username']?>">Send Message</a>
		<hr>
	</dl>
		<?php }		?>
			</div>
</body>
</html>