<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset ul{
			padding: 5px;
			list-style-type: none;
			background-color: lightgreen;
			position: sticky;
			top:10px;
			border-radius:20px;
		}
		fieldset li{
			display: inline;
			padding: 5px;
			border-right: 1px solid grey;
		}
		fieldset li:last-child{
			border:0px;
		}
		fieldset{
			border:none;
			margin:0px;
			position: sticky;
			top :2px;

		}
		body{
			background-color: white;
		}
		.lgd-btn ul{
				border:1px solid black;
				position: sticky;
				top:100%;
		}
		
	</style>
</head>
<body>
	<fieldset>
	<legend align="center">
	<div class="lgd-btn" style="float: left;">
		<ul>
		<li><a href="FetchNews.php">Home</a></li>
		</ul>
	</div>
	<div class="lgd-btn" style="float: left;">
		<ul>
			<li><a href="Profile.php" >Profile</a></li>
		</ul>
	</div>
		<div class="lgd-btn" style="float: left;">
		<ul>
			<li><a href="Post.php" >Post</a></li>
		</ul>
	</div>
	<div class="lgd-btn" style="float: left;">
		<ul>
			<li><a href="MyPost.php" target="frameMain">My Posts</a></li>
		</ul>
	</div>
	<div class="lgd-btn" style="float: left;">
		<ul>
			<li><a href="AllMembers.php" target="frameMain">View Members</a></li>
		</ul>
	</div>
	<div class="lgd-btn" style="float: left;">
		<ul>
			<li><a href="ViewMessages.php?sender=all" target="frameMain">View Messages</a></li>
		</ul>
	</div>
		
		
		
		
		
	
	<div class="lgd-btn" style="float: right;">
		<ul>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	</legend>
	
	
		
	
	</fieldset>
</body>
</html>