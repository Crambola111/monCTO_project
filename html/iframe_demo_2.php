<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<style type="text/css">
		@import "../css/style_iframe.css"
	</style>
</head>
<body>
	<div class="left_part">
		<img src="https://lemag.nikonclub.fr/wp-content/uploads/2016/11/Photo-selection-pour-Nikon-France-Mattia-Bonavida-2016-8.jpg"
		alt="universe" width="450" height="300">
	</div>
	<div class="right_part" >
		<div class="content">
			<?php include '../db_connect/show_db1.php'; ?>
		</div>	
		<div class="time_spent">
			<p>Time Spent:</p>
		</div>
		<div class="btns">
			<a href="#" class="reply_btn">reply to this update</a><br><br>
			<a href="#" class="reply_btn">ask more information about</a>
		</div>
	</div>
</body>
</html>