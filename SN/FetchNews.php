<?php
include_once 'config.php';

if(!isset($_SESSION['User'])){
	header("Location:Login.php");	
}
else{
	include_once 'Nav-bar.php';
	//print_r(isset($_SESSION));
$user=$_SESSION['User'];

}
$res=mysqli_query($con,"Select * from (Select * from img_data order by date desc) as a  order by time desc");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		#online{
			position: fixed;
			right:0.5%;
			bottom: 0.5%;
			box-shadow: 0px 0px 2px 2px black;
			border-radius: 20px;
		}
		iframe{
			border-radius:20px;
		}
		#list{
			list-style-type: none;
		}
		#feed ul{
			border:1px solid black;
			border-radius: 10px;
			width:500px;
			margin-bottom: 10px;
			padding: 0px;
		}
		.user{
			font-size: 20px;
			background-color: lightgrey;
			margin-bottom:  10px;
			padding: 10px;
			border-radius: 10px;

		}
		.user img{
			border-radius:15px;
			text-align: left;

		}
		#feed{
			border:1px solid black;
			border-radius: 10px;
		}
		#feed ul li{
			margin-bottom: 0px;

		}

		a{
			text-decoration: none;
		}
		.image img{
			box-shadow: 0px 0px 5px black;
		}

		button{
			border-radius: 60px;
			border:none;
			background-color: white;
			transition: all 0.5s;
			}
		button img{
				height: 50px;
				width: 60px;
		}
		.style{
			background-color: red;
		}
	</style>
	
	<script type="text/javascript">

		function read(id){
				//var ajaxOb;
					var element=document.getElementById("like"+id);
						element.classList.add("style");
						console.log("class added");
					setTimeout(function() {
						var element=document.getElementById("like"+id);
						element.classList.remove("style");
						console.log("class removed");
					},500);
					var xhttp = new XMLHttpRequest();
					  xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) {
					      document.getElementById("liked"+id).innerHTML =
					      this.responseText;
					      console.log(this.responseText);
					    }
					  };
					xhttp.open("GET","LikePro.php?id="+id,true);
					xhttp.send(null);
					console.log("Requset Sent");
				
				
			}
		function insert(id){

		}

	</script>
</head>
<body>
	<H2 align="center">Feeds..</H2>
	<div align="center" id='img_dialog'>
	<div id="feed"><?php
		while($row = $res->fetch_assoc()){
			$res1 = mysqli_query($con,"Select count(img_id) from liked where img_id=".$row['img_id']);
			$res1 = $res1->fetch_assoc();
			//print_r('Select profilephoto from user where user="'.$row['user'].'"');
			$res2 = mysqli_query($con,'Select profilephoto from user where username="'.$row['user'].'"');
			//print_r($res2);
			$res2 = $res2->fetch_assoc();
			echo '<ul id="list">';
			echo '<li><b><div class="user"><img width="25px" height="25px" src="data:image;base64,'.base64_encode($res2['profilephoto']).'"><a href="ViewProfile.php?user='.$row['user'].'" >'.$row['user'].'</a></div></b></li><hr>';
			echo '<li><div class="image"><img style="max-height:400px;max-width:370px;" src="data:image;base64,'.base64_encode($row['image']).'"></li>';
			echo '<li align="right" style="color:grey;font-size:10px;">'.$row['time'].' '.$row['date'].'</li>';
			
			echo '<p align="left"><button id="like'.$row['img_id'].'" type="submit" onclick="read(\''.$row['img_id'].'\')"><img src="Liked.png"></button></p>';
			//print_r($res1);
			echo '<div align="left" id="liked'.$row['img_id'].'"><b>Likes:'.$res1['count(img_id)'].'</b><div>';	
			
			echo '</ul>';

		}
	  ?></div>
	  </div>
	  <div id="online">
	  	<iframe src="onlineUser.php"></iframe>
	  </div>
</body>
</html>



