<?php
include_once 'config.php';
include_once 'Nav-bar.php';
$user=$_SESSION['User'];

?>
<html>
<head>
	<title></title>
	<style type="text/css">
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
			transition: all 1s;
			}
		button img{
				height: 50px;
				width: 60px;
		}
		
	</style>
	<script type="text/javascript">
		function read(id){
				//var ajaxOb;
			
					
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

	</script>
</head>
<body>
	<H2 align="center">My Posts..</H2>
	<div id='feed' align="center">
	<?php
		$res=mysqli_query($con,"Select * from (Select * from img_data order by date desc) as a where user='".$user."' order by time desc");
		while($row = $res->fetch_assoc()){
			$res1 = mysqli_query($con,"Select count(img_id) from liked where img_id=".$row['img_id']);
			$res1 = $res1->fetch_assoc();
			echo '<ul id="list">';
			echo '<li><b><div class="user">'.$row['user'].'</div></b></li>';
			echo '<li><div class="image"><img style="max-height:400px;max-width:370px;" src="data:image;base64,'.base64_encode($row['image']).'"></li>';
			echo '<li align="right" style="color:grey;font-size:10px;">'.$row['time'].' '.$row['date'].'</li>';
			
			//print_r($res1);
			echo '<div align="left" id="liked'.$row['img_id'].'"><b>Liked:'.$res1['count(img_id)'].'</b><div>';	
			echo '</ul>';
		}
	  ?>
	</div>
</body>
</html>