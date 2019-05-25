<html>
<body bgcolor="FAEBD7">
<?php
	include("DBConnection.php");
 
	$reservation_no=$_POST["reservation_no"];
	$book_no=$_POST["book_no"];
	$student_ID=$_POST["student_ID"];
	$issue_date=$_POST["issue_date"];
	$due_date=$_POST["due_date"];
 
	$query = "INSERT INTO add_reservation (reservation_no, book_no, student_ID, issue_date, due_date)
		values ('$reservation_no', '$book_no', '$student_ID', '$issue_date', '$due_date')";
	$result = mysqli_query($db,$query);
	header ("refresh:1; url = addReservation.php");
?> 
<script>
	alert('Add successfully!');
</script>
</body>
</html>