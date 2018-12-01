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
		<img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OS83NTgvb3JpZ2luYWwvc3RhcnMtdW5pdmVyc2UuanBn"
		alt="universe" width="450" height="300">
	</div>
	<div class="right_part" >
		<div class="content">
			<?php include '../db_connect/show_db.php'; ?>
		</div>
		<div class="time_spent">
			<p>Time Spent:</p>
		</div>
		<div>
			<a href="#" class="reply_btn">reply to this update</a><br><br>
			<a href="#" class="reply_btn">ask more information about</a>
		</div>
	</div>
</body>
</html>