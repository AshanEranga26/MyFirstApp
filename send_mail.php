<?php
if(isset($_POST['email_data'])){
	require '';
	$output='';
	foreach($_POST['email_data'] as $row){
		$mail=new PHPMailer;
		$mail->IsSMTP();
		$mail->Host='smtpout.secureserver.net';
		$mail->Port='80';
		$mail->SMTPAuth=true;
		$mail->Username='xxxxxx';
		$mail->Password='xxxxxx';
		$mail->SMOTSecure='';
		$mail->From='info@webslesson.com';
		$mail->FromName='Webslesson';
		$mail->AddAddress($row["email"], $row["name"]);
		$mail->WordWrap=50;
		$mail->IsHTML(true);
		$mail->Subject='aaaaaaaaa';
		$mail->Body='xxxxxxxxxxxxxxxxxxxxx';
		$mail->AltBody='';
		$result=$mail->Send();
		if($result["code"]=='400'){
			$output.=html_entity_decode($result['full_error']);
		}
		if($output==''){
			echo 'ok';
		}else{
			echo $output;
		}
	}
}
?>