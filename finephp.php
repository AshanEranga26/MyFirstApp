<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<?php
	include("DBConnection.php");
 
	$reservation_no=$_POST["reservation_no"];
	$return_date=$_POST["return_date"];
	$fine=$_POST["fine"];
	
	$query = "INSERT INTO fine (reservation_no,return_date, fine) values ('$reservation_no', '$return_date', '$fine')";
	$result = mysqli_query($db,$query);
	
	//table load
	$query = "select * from fine f inner join add_reservation a where f.reservation_no=a.reservation_no";
	$result = mysqli_query($db, $query);
	
	echo "<table border='2' align='center' cellpadding='5' cellspacing = '5'>
	<tr>
		<th>reservation_no</th>
		<th>student_ID</th>
		<th>book_no</th>
		<th>issue_date</th>
		<th>due_date</th>
		<th>return_date_date</th>
		<th>fine</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['reservation_no'] . "</td>";
		echo "<td>" . $row['student_ID'] . "</td>";
		echo "<td>" . $row['book_no'] . "</td>";
		echo "<td>" . $row['issue_date'] . "</td>";
		echo "<td>" . $row['due_date'] . "</td>";
		echo "<td>" . $row['return_date'] . "</td>";
		echo "<td>" . $row['fine'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($db);
?>
<script>
	alert('Add successfully!');
</script>
</body>
</html>