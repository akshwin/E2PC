<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];


		//date_default_timezone_set('Asia/Kolkata');
		$timestamp_capture = time();
		//$reg_time = date('d-m-Y h:i:s a', time());
		//$reg_ip = $_SERVER['REMOTE_ADDR'];
		//$reg_ip_proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];

		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
	    	$siteurl = "https://".$_SERVER['SERVER_NAME'];
	    }else{
	    	$siteurl = "http://".$_SERVER['SERVER_NAME'];
	    }

	
		$to = "test@websitetemplates.site";
		$mail_subject = "Contact Query From $name | Message ID ".$timestamp_capture;
		$mail_message = "
		<br>
		<p>Enquiry details are as below:</p>
		<br>
		<p><strong>Name:</strong> $name</p> 
		<p><strong>Email:</strong> $email</p> 
		<p><strong>Message</strong></p>
		<p>
		$message
		</p>
		<br><br><br>...<br>
		This message is sent from $siteurl using a contact form.
		";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: '.$name.' <noreply@'.$_SERVER['SERVER_NAME'].'>' . "\r\n" . 'Reply-To: '.$email."\r\n";
		$sendmail = mail($to,$mail_subject,$mail_message,$headers);

		if($sendmail){
			$response['status'] = 'ok';
			$response['msg'] = 'Message Sent Successfully.';
			echo json_encode($response);
		}else{
			$response['status'] = 'error';
			$response['msg'] = 'Something Went Wrong. Form is not submitted.';
			echo json_encode($response);
		}
			

}else{
	$response['status'] = 'error';
	$response['msg'] = 'Something Went Wrong. Form is not submitted.';
	echo json_encode($response);
}
?>