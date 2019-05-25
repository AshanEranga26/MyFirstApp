<html>
<body>
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<table border=2 align="center" cellpadding="5" cellspacing="5">
<br>
<center><h2> Delete Reservation from Database</h2></center>

<body bgcolor="FAEBD7">

	<tr>
		<th>Reservation No</th>
		<th>Student ID</th>
		<th>Book No</th>
		<th>Delete</th>
	</tr>
	<?php
			include("DBConnection.php");
			
			$sql = "select * from add_reservation";
			$records = mysqli_query($db, $sql) or die(mysqli_error());
			
			while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
				echo "<td>".$row['reservation_no']."</td>";
				echo "<td>".$row['student_ID']."</td>";
				echo "<td>".$row['book_no']."</td>";
				echo "<td><a href = deletephp.php?reservation_no=".$row['reservation_no'].">Delete</a></td>";
			}
	?>
	
</body>
</html>