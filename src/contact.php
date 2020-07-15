<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$data = [
		'secret' => "6Lc0X7EZAAAAAI7LZUfyOcbbA34r2HUS5zVjLPNG",
		'response' => $_POST['token']
	];
	$options = array(
		'http' => array(
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context = stream_context_create($options);
	$response = file_get_contents($url, false, $context);

	$res = json_decode($response, true);
	if ($res['success'] == true) {

		$to_email   	= "csmith99@protonmail.com"; //Recipient email, Replace with own email here
		$from_email     = 'noreply@sudo-make.co.uk'; //from mail, it is mandatory with some hosts and without it mail might end up in spam.

		//check if its an ajax request, exit if not
		if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
			
			$output = json_encode(array( //create JSON data
				'type'=>'error', 
				'text' => 'Sorry Request must be Ajax POST'
			));
			die($output); //exit script outputting json data
		}
		echo("DONE");
		
		//Sanitize input data using PHP filter_var().
		$user_email		= filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
		$subject		= filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
		$message		= filter_var($_POST["message"], FILTER_SANITIZE_STRING);
		
		//additional php validation
		if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
			$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
			die($output);
		}
		if(strlen($subject)<3){ //check emtpy subject
			$output = json_encode(array('type'=>'error', 'text' => 'Subject is required'));
			die($output);
		}
		if(strlen($message)<3){ //check emtpy message
			$output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
			die($output);
		}
		
		//email body
		$message_body = $message."\r\n\r\n-"."\r\nEmail : ".$user_email;
		
		//proceed with PHP email.
		$headers = 'From: '. $from_email .'' . "\r\n" .
		'Reply-To: '.$user_email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		$send_mail = mail($to_email, $subject, $message_body, $headers);
		
		if(!$send_mail)
		{
			//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
			$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
			die($output);
		}else{
			$output = json_encode(array('type'=>'message', 'text' => 'Thank you for your email'));
			die($output);
		}
	}
	echo("There Was an Error :(");
}
?>