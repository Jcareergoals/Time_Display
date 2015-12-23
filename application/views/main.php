<!DOCTYPE html>
<html lang="en">
<head>
	<title>Time Display</title>
	<meta charset="UTF-8">
	<meta name="description" content="This page displays your current local time. It was built using the CodeIgniter MVC Framework.">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<style type="text/css">
		#container, h3, h1{
			margin: 10px auto;
			padding: 10px;
			text-align: center;
			border: 2px solid black;
			background-color: rgb(245,245,245);  
		}
		#container {
			width: 880px; 
			background-color: silver;
			height: 580px;
		}
		h3 { width: 270px; }
		h1 { width: 500px; }
	</style>
</head>
<body>
	<div id="container">
		<h3>The current time and date:</h3>
		<?php 
			echo "<h1>".$date."<br>".$time."</h1>";
		 ?>
		 <form action="times" method='post'>
		 	<input type='submit' value='Get updated time' class='updated_time'>
		 </form>
	</div> <!-- End Container -->
</body> 
</head>