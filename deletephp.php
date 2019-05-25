<html>
<body bgcolor="FAEBD7">
<?php
	include("DBConnection.php");
	$sql = "delete from add_reservation where reservation_no = '$_GET[reservation_no]'";
	
	if(mysqli_query($db, $sql))
		header ("refresh:1; url = delete.php");
	else
		echo "Not Deleted";
?>
</body>
</html>