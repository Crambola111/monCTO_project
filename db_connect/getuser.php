<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'Lzj956970');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("moncto_test", $con);

$sql="SELECT * FROM event WHERE title = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>title</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['title'] . "</td>";
 echo "<td>" . $row['start_date'] . "</td>";
 echo "<td>" . $row['finish_date'] . "</td>";
 echo "<td>" . $row['time_planned'] . "</td>";
 echo "<td>" . $row['discription'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysql_close($con);
?>