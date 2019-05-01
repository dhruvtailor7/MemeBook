<?php 
	include_once 'config.php';
	include_once 'Nav-bar.php';

	if(!isset($_SESSION['User']))
		header("Location:Login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	
		#frame{
				border:none;

		}
	</style>
	<script type="text/javascript">
		
		function set() {
			// body...
			document.getElementById('frame').style.height=window.innerHeight+"px";
			
		}
		var i=0;
		function visibility() {
			// body...
			
			if(i%2 == 0){
				document.getElementById('onlineUser').style.display="block";
				console.log(i=i+1);
			}
			else{
				document.getElementById('onlineUser').style.display="none";
				console.log(i=i+1);
			}
		}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="body" onload="set()">
	
	
	
	
	
  	
	

	
	
	
</body>
</html>