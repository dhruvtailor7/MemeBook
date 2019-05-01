<?php
include_once 'config.php';
if(!isset($_SESSION['errorR']))
	$error="";
else
	$error=$_SESSION['errorR'];
?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Network</title>
	<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
	<style type="text/css">
		body{
			background-image: url(back_Login.jpg);
			background-size:100%;
			margin: 100px;
		}
		h1{
			font-family: 'Rancho' ;
			color: black;
			text-shadow:1px 1px white;
		}
		div{
			background:rgba(20,20,20,.3);
			height: auto;
			box-shadow: 0px 0px 10px 5px black;
			border-radius: 20px;
			padding:  20px;
			width: 400px;
			position: relative;
			animation-name:  move;
			animation-duration: 1s;
			animation-timing-function: ease-out;
			animation-fill-mode: forwards;
		}
		div table{
			border:0px;
			font-size: 20px;
			color:white;
			text-shadow: 1px 1px black;
		}
		div table td input{
			border-radius: 5px;
			background-color: rgba(255,194,81,1);
			transition: all 0.5s;
			border:0px;
			padding:5px;
		}
		div table td input:hover{
			background-color: rgba(255,194,81,0.8);
		}
		@keyframes move{
			from{
				left:-400px;
			}
			to{
				left:100px;
			}
		}
	</style>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div id="Login">
		<h1 align="center">Register</h1>
		<label style="color: red;align-self: center; "><?php echo $error;?></label>

		<table  align="center" cellpadding="5px">
			<form method="POST" action="RegPro.php">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td>ReType-Password:</td>
				<td><input type="Password" name="repassword"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email" pattern="\[A-Za-z]+@[A-Za-z]+.[A-Za-z]\"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="Register" value="Register"></td>
			</tr>
			</form>
		</table>
		<h5>Registered User?<a href="Login.php">Click Here</a></h5>
	</div>
</body>
</html>