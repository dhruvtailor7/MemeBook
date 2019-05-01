<?php
include_once 'config.php';
include_once 'Nav-bar.php';
$user = $_SESSION['User'];
$res=mysqli_query($con,"Select * from User where username='$user'");
if($res->num_rows > 1){
	echo 'database error';
}
elseif($res->num_rows == 1){
	$row=$res->fetch_assoc();
	$name=$row['name'];
	$email=$row['email'];
}
?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<script type="text/javascript">
  		function editemail() {
  			// body...
  			
  			if(!document.getElementById('eemail').checked){
  			document.getElementById('email').readOnly="true";
  			}
  			else{
  			document.getElementById('email').readOnly="false";	
  			}
  		}
  		function editName() {
  			// body...
  			
  			if(!document.getElementById('ename').checked){
  			document.getElementById('name').readOnly="true";
  			
  			}
  			else{
  			document.getElementById('name').readOnly="false";
  			}
  		}
  		function load() {
  			// body...
  			document.getElementById('email').value="<?php echo $email; ?>";
  			document.getElementById('name').value="<?php echo $name; ?>";
  		}
  	</script>
  </head>
  <body onload="load()">
  		<form action="EditProfilePro.php" method="post">
  			<table border="0px">
				  		<tr><td>New Name:</td><td><input type="text" id="name"></td><td>Edit<input type="checkbox" id="ename" onchange="editName()"></td></tr>	
				  		<tr><td>New Email:</td><td><input type="text" id="email"></td><td>Edit<input type="checkbox" id="eemail" onchange="editemail()"></td></tr>
				  		<tr><td colspan="2"><input align="center" type="submit" value="Edit"></td></tr>
  			</table>
  		</form>
  </body>
  </html>