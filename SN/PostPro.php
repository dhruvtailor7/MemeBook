<?php
include_once 'config.php';
$user=$_SESSION['User'];
if($_FILES['img']['tmp_name'] == ""){
	header("Location:Post.php");
}	
else{
$file=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$date=date("Y-m-d");$time=date("H:i:s");
mysqli_query($con,"Insert into img_data(user,image,date,time) values('$user','$file','$date','$time')") or die($con->error);
echo 'Image posted';
header("Location:FetchNews.php");
}
?>