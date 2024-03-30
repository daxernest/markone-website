<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = 'ernest.m.kimani@gmail.com';
	$headers = 'From: '.$mailFrom;
	$txt = 'You have received email from '.$name.'.\n\n'.$message;

	$response_name = $name
	$response_subject = 'Acknowledgement  from MarkOne Ltd'
	$response_message = 'Thank you '.$response_name."We have received you're email and our team will reach out to you as soon as possible"
	$response_mailTo = $mailFrom

	if(mail($mailTo, $subject, $txt, $headers)){
		echo "mail sent succesfuly";
		mail($response_mailTo, $response_subject, $response_message)
	}
		else{
			echo "sorry";
		}
}
else{
	echo "fail";
}
?>