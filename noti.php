<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<center><h2> Notification </h2>
<form>
<?php
	include("DBConnection.php");
	$query = "select * from fine f inner join add_reservation a, student s where f.reservation_no=a.reservation_no and s.student_ID=a.student_ID";
	$result = mysqli_query($db, $query);

	echo "<table border='2' align='center' cellpadding='5' cellspacing = '5'>
	<tr>
		<th>Reservation No</th>
		<th>Student ID</th>
		<th>Fine</th>
		<th>Email</th>
	</tr>";
	$count=0;
	foreach($result as $row)
	{
		$count=$count+1;
		echo '<tr>
				<td>'.$row['reservation_no'].'</td>
				<td>'.$row['student_ID'].'</td>
				<td>'.$row['fine'].'</td>
				<td>'.$row['email'].'</td>
				<td>
					<input type="checkbox"
				</td>
				<td>
					<button type="button" name="email_button" class="btn btn-info btn-xs email_button" 
					id="'.$count.'" data-email="'.$row["email"].'"data-name="'.$row["student_name"].'"data-action="single">Send Email</button>
				</td>
			</tr>';
	}
?>
<tr>
	<td colspan="3"></td>
	<td><button type="button" name="select_email" class="btn btn-info email_button" id="select_email" data-action="select">Select Email</button>
	</td>
</tr>

</center>
</form>
</body>
</html>

<script>
	$(document).ready(function(){
		$('.email_button').click(function(){
			$(this).attr('disabled', 'disabled');
			var id=$(this).attr("id");
			var action=$(this).data("action");
			if(action=='single'){
				email_data.push({
					email: $(this).data("email"),
					name: $(this).data("name")
				});
			}else{
				$('.single_select').each(function(){
					if($(this).prop("checked")==true){
						email_data.push({
							email: $(this).data("email"),
							name: $(this).data('name')
						}):
					}
				});
			}
			$.ajax({
				url:"send_mail.php",
				method:"POST",
				data:{email_data:email_data},
				beforeSend:function(){
					$('#'+id).html('Sending...!);
					$('#'+id).addClass('btn-danger');
				},
				success:function(){
					if(data=='ok'){
						$('#'+id).text('success');
						$('#'+id).removeClass('btn-danger');
						$('#'+id).removeClass('btn-info');
						$('#'+id).addClass('btn-success');
					}else{
						$('#'+id).text(data);
					}
					$('#'+id).attr('disabled', false);
				}
			})
		});
	});
</script>