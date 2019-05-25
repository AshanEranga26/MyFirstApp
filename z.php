
<?php
	include("DBConnection.php");

$query="select * from fine f inner join add_reservation a where f.reservation_no=a.reservation_no";;
	$result=mysqli_query($db,$query);
	while(mysqli_fetch_assoc($result))
	{    
	$date1=strtotime("$return_date");
	$date2=strtotime("select issue_date from add_reservation");
	$diff=abs($date1-$date2);
	$years = floor($diff/(365*60*60*24));  
	$months = floor(($diff-$years * 365*60*60*24)/(30*60*60*24));  
	$days = floor(($diff-$years*365*60*60*24-$months*30*60*60*24)/(60*60*24)); 
  
	$fine = $days*5;
	echo "".$fine;
   
}
?>