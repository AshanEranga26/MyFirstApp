<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
	<tr>
		<th> Book Reservation No </th>
		<th> Book No </th>
		<th> Student No </th>
		<th> Issue Date </th>
		<th> Due Date </th>
	</tr>

<?php
	include("DBConnection.php");
	$set=$_REQUEST['search'];
	if($set)
	{
		$show="select * from add_reservation where reservation_no ='$set'";
		$result = mysqli_query($db,$show);
		while($rows=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>";
			echo $rows ["reservation_no"];
			echo "</td>";
			echo "<td>";
			echo $rows["book_no"];
			echo "</td>";
			echo "<td>";
			echo $rows["student_ID"];
			echo "</td>";
			echo "<td>";
			echo $rows["issue_date"];
			echo "</td>";
			echo "<td>";
			echo $rows["due_date"];
			echo "</td>";
			echo "</tr>";
		}
	}else{
		echo "Please Enter Reservation No";
	}

?>
</table>
</body>
</html>