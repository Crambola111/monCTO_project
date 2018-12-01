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

	$sql1 = "SELECT title,start_date,finish_date,time_planned,discription FROM event WHERE title = 'monCTO'";
	$result1 = $conn->query($sql1);
	if ($result1->num_rows > 0) {
	    while($row = $result1->fetch_assoc()) {
	        echo '<div class="content_title"><p style="font-size: 25px; color: #fff">'.$row["title"].'</p></div>'.'<div class="content_cont"><p style="color: #fff;font-size: 15px;">'. $row["discription"].'</p></div>';
	    }
	} else {
	    echo "0 result";
	}
	$conn->close();
?>
