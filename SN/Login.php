<?php
include_once 'config.php';
if(!isset($_SESSION['error']))
	$error="";
else
	$error=$_SESSION['error'];
session_destroy();
?><!DOCTYPE html>
<html>
<head>
	
	<title>My Network</title>
	<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple">
	<style type="text/css">
		body{
			background-image: url(back_Login.jpg);
			background-size:cover;
			margin: 100px;
			background-repeat: no-repeat;
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
		<h1 align="center">LOGIN</h1>
		<label style="color: red;align-self: center; "><?php echo $error;?></label>
		<table  align="center" cellpadding="5px">
			<form method="POST" action="LoginPro.php">
			
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="Login" value="Login"></td>
			</tr>
			</form>
		</table>
		<h5>Not Registered yet?<a href="Register.php">Click Here</a></h5>
	</div>
</body>
</html>