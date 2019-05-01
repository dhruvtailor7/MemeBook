<?php
include_once 'config.php';
include_once 'Nav-bar.php';
if(!isset($_SESSION))
	header("Location:Login.php");
$to=$_GET['to'];
$from=$_SESSION['User'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Compose Message</h3>
	<form action="SendMessagePro.php" method="POST">
		<table>
		<tr>
		<td>from:</td><td><input type="text" readonly="true" name="sender" value="<?php echo $from;?>"></td>
		</tr>
		<tr>
		<td>to:</td><td><input type="text" name="receicer" value="<?php echo $to;?>"></td>
		</tr>
		<tr>
			<td>Message:</td>
			<td><textarea name="Message" cols="50px" rows="20px" wrap="physical"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Send"></td>
		</tr>
		</table>
	</form>
</body>
</html>