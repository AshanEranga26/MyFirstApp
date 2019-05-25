<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<form action="finephp.php" method="post"><br>
	<table>
	<tr>
		<td> reservation_no :</td>
		<td> <input type="text" name="reservation_no" size="48"> </td>
	</tr>
	<tr>
		<td> return Date :</td>
		<td> <input type="text" name="return_date" size="48"> </td>
	</tr>
	<tr>
		<td> Fine :</td>
		<td> <input type="text" name="fine" size="48"> </td>
	</tr>
	1 day for pay Rs.5.00
	<tr><td>
		<input type="submit" value="Submit" >
		<input type="reset" value="Reset">
	</td></tr>
	</table>
	
<?php
	//table load
	include("DBConnection.php");
	$query = "SELECT * FROM add_reservation";
	$result = mysqli_query($db, $query);
	
	echo "<table border='2' align='center' cellpadding='5' cellspacing = '5'>
	<tr>
		<th>reservation_no</th>
		<th>student_ID</th>
		<th>book_no</th>
		<th>issue_date</th>
		<th>due_date</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['reservation_no'] . "</td>";
		echo "<td>" . $row['student_ID'] . "</td>";
		echo "<td>" . $row['book_no'] . "</td>";
		echo "<td>" . $row['issue_date'] . "</td>";
		echo "<td>" . $row['due_date'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_close($db);
?>
</form>
</body>
</html>