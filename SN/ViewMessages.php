<?php
include_once 'config.php';
include_once 'Nav-bar.php';
if(!isset($_SESSION['User'])){
	header("Location:Login.php");
}
$sen=$_GET['sender'];
if ($sen == 'all') {
	# code...
	$res=mysqli_query($con,"Select * from Messages where sender='".$_SESSION['User']."' or receiver='".$_SESSION['User']."'");
}
else{
	$res=mysqli_query($con,"Select * from Messages where sender='".$_SESSION['User']."' and receiver='".$sen."'");	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function getNewMsg() {
			// body...
			window.location=location.href;
			
		}
		setInterval(getNewMsg,10000);	
	</script>
</head>
<body>
	<h3>Messaegs</h3>
	<?php while($row = $res->fetch_assoc()){ ?>
	<b><?php echo $row['sender'];?></b>:
	<?php echo $row['Msg'];?>		<br><hr>
<?php } ?>
</body>
</html>