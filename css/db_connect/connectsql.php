
<?php 

	session_start();

	$title = $_POST['TITLE'];
	$start_date = $_POST['START_DATE'];
	$finish_date = $_POST['FINSH_DATE'];
	$time_planned = $_POST['TIME_PLANNED'];
	$description = $_POST['DESCRIPTION'];
	//$file_file = $_POST['file_file'];
	//$file_photo = $_POST['file_photo'];


	$conn = mysqli_connect("localhost","root","Lzj956970","moncto_test");
		
		$sql = "INSERT INTO event(title,start_date,finish_date,time_planned,discription,insert_time) VALUES('{$title}','{$start_date}','{$finish_date}','{$time_planned}','{$description}',NOW())";

		mysqli_query($conn,$sql); 

		if (mysqli_query($conn, $sql)) {
			include '../html/client_page.php';
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);


 ?>