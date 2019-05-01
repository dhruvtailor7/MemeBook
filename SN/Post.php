<?php
include_once 'config.php';
include_once 'Nav-bar.php';
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
	<div id="profile"><H1 align="center">Create Post</H1>
	<hr>
	<form action="PostPro.php" method="post" enctype="multipart/form-data">
		<table>
			<tr><td>Insert Image:</td><td><input type="file" name="img" accept="Image/*"></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" value="Upload"></td></tr>
		</table>
	</form>
</div>
</body>
</html>