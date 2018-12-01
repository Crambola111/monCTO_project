<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title</title>
	<style type="text/css">
		
		@import "../css/style_client_page.css";
		
	</style>
</head>
<body>
	<div id="container">
		<div id="header" style= "text-align: center;">	
			<aside class="box" id="sidebar">
				<button id="btn">三</button>
				<script type="text/javascript" src="../js/sidebar.js"></script>
				<ul>
					<div style="height: 150px;">
						<li>
							<h1 style="padding-top: 50px">monCTO.io</h1>
						</li>
					</div>	
					<?php 

						header("Content-type:text/html;charset=utf-8");
						$servername = "localhost";
						$username = "root";
						$password = "Lzj956970";
						$dbname = "moncto_test";

						$conn = new mysqli($servername, $username, $password, $dbname);

						if ($conn->connect_error) {
						    die("failed " . $conn->connect_error);
						}
						$sql = "SELECT start_date,finish_date,time_planned FROM event WHERE title = 'monCTO'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						        echo '<li><a href="#" style="color: #fff; padding-top: 0px;">'.'Start Time'.'<br>'.$row["start_date"].'</a></li>'.'<li><a href="#" style="color: #fff; padding-top: 50px;">'.'Finish Time'.'<br>'. $row["finish_date"].'</a></li>'.'<li><a href="#" style="color: #fff; padding-top: 100px;">'.'Time Planned'.'<br>'.$row["time_planned"].'</a></li>';
						    }
						} else {
						    echo "0 result";
						}
						mysqli_close($conn);

					?>

					<li><a href="login.php" style="color:#fff;padding-top:150px;">Return</a><li>
				</ul>			
			</aside>	
			<section>
				<br>
				<h1 style="margin-bottom: 0;color: #000;">GLMPOD FEED</h1>
				<br>
				<hr>
				<div id="show_cards" style="padding: 2%;">
					<h1 id="title_card" style="text-align: center; font-size: 30px;">
						<?php 
						header("Content-type:text/html;charset=utf-8");
						$servername = "localhost";
						$username = "root";
						$password = "Lzj956970";
						$dbname = "moncto_test";
						$conn = new mysqli($servername, $username, $password, $dbname);
						$sql = "SELECT start_date FROM event WHERE title = 'monCTO'";
						$result = $conn->query($sql);

						while($row = $result->fetch_assoc()) {
							echo $row["start_date"];
							    }
							mysqli_close($conn);
						?>
					</h1>
					<iframe runat="server" src="iframe_demo_1.php" frameborder="0" width="1100" height="350" ></iframe>
					
					<hr>
					<br><br>
					<h1 id="title_card" style="text-align: center; font-size: 30px;">
						<?php 
						header("Content-type:text/html;charset=utf-8");
						$servername = "localhost";
						$username = "root";
						$password = "Lzj956970";
						$dbname = "moncto_test";
						$conn = new mysqli($servername, $username, $password, $dbname);
						$sql = "SELECT start_date FROM event WHERE title = 'moncto1'";
						$result = $conn->query($sql);

						while($row = $result->fetch_assoc()) {
							echo $row["start_date"];
							    }
							mysqli_close($conn);
						?>
					</h1>
					<iframe runat="server" src="iframe_demo_2.php" frameborder="0" width="1100" height="350" ></iframe>
					
				</div>
			</section>			
		</div>
		<div style="background-color: #fff; height: 100px;"></div>	
		<div style="background-color: #212121; height: 220px;">
			<div style="padding-top: 30px; padding-left: 200px; float: left; height: 40px;">
				<h1 style="color: #fff; font-size: 25px;">Legal Resources</h1><br>
				<a href="#" style="color: #9e9e9e">Contract</a><br><br>
				<a href="#" style="color: #9e9e9e">IBAN monCTO</a><br><br>
				<a href="#" style="color: #9e9e9e">NDA</a><br>
			</div>
			<div style="padding-top: 30px; padding-left: 200px; float: left;height: 50px">
				<h1 style="color: #fff; font-size: 25px;">Tech Resources</h1><br>
				<a href="#" style="color: #9e9e9e">Timeline</a><br><br>
				<a href="#" style="color: #9e9e9e">Project related doc</a><br>
			</div>
			<div style="padding-top: 30px; padding-left: 200px; float: left;height: 50px">
				<h1 style="color: #fff; font-size: 25px;">monCTO</h1><br>
				<p style="color: #9e9e9e">A team of tech-entrepreneurs to accelerate your <br> technological projects. Because technology should not be<br>seen as a brake, but on the contrary, as a catalyst of your <br> ideas and your project's developpment</p>
			</div>
			
		</div>	
		<div style="background-color: #212121; height: 80px;">
			<h1 style="color: #9e9e9e; text-align: center;">monCTO.io 2018</h1>
		</div>	
	</div>	
	
	

</body>
</html>