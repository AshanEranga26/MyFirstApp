<!DOCTYPE HTML>
<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">

<center>
<h2>Add Reservation</h2>
<form action="addReservationphp.php" method="post">
<table>
	<tr>
		<td> Book Reservation No :</td>
		<td> <input type="text" name="reservation_no" size="48" > </td>
	</tr>
	<tr>
		<td> Book No :</td>
		<td> <input type="text" name="book_no" size="48"> </td>
	</tr>
	<tr>
		<td> Student ID :</td>
		<td> <input type="text" name="student_ID" size="48"> </td>
	</tr>
	<tr>
		<td> Issue Date :</td>
		<td> <input type="text" name="issue_date" size="48"> </td>
	</tr>
	<tr>
		<td> Due Date: </td>
		<td> <input type="text" name="due_date" size="48"> </td>
	</tr>
	<tr><td>
		<input type="submit" value="Submit" >
		<input type="reset" value="Reset">
	</td></tr>
</table>
</form>
</body>
</center>
</html>