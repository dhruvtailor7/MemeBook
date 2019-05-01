<?php
	include_once 'config.php';
	$id=$_GET['id'];
	$res=mysqli_query($con,"Select * from liked where img_id=".$id." and user=".$_SESSION['id']);
	
	if($res->num_rows > 0){

	}
	else{
		$sql="insert into `liked` values(".$id.",".$_SESSION['id'].")";
	$stmt=mysqli_prepare($con,$sql);
	mysqli_execute($stmt);		
	}
	
	//$sql1;
	$res=mysqli_query($con,"Select  count(img_id) from liked where img_id=".$id);
	if($res->num_rows!=0){
		while($row = $res->fetch_assoc()){
			$string=$row['count(img_id)'];
			$_SESSION['liked']=$row['count(img_id)'];
		}
	}
	echo "<b>Likes:".$string."</b>";
?>