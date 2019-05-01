<?php 
include_once 'config.php';
$res=mysqli_query($con,"Select * from user where active=true");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: lightgrey;
		}
	</style>
	<script type="text/javascript">
		function getOnlineUsers() {
			// body...
			var ajax=new XMLHttpRequest();
			ajax.onreadystatechange=function(){
				if(this.readyState == 4 && this.status == 200){
					var element = document.getElementById('lis');
					element.innerHTML = this.responseText;
				}
			}
			ajax.open("GET" , "OnlineUser.php",true);
			ajax.send();
			
		}
		setInterval(getOnlineUsers,1000);
	</script>
</head>
<body id="lis">
	<h3 align="center">Online User</h3>
	<ul >
	<?php
	while($row = $res->fetch_assoc()) {
		
		echo '<li>'.$row['username'].'</li>';
	}
	 ?>
	 </ul>
</body>
</html>