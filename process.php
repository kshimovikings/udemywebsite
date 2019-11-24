<?php  ob_start();
	if(isset($_POST{'submit'])){
		
		
		$to = "kshimo@vikings.sjrstate.edu";
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$txt = $POST['message'];
		$headers = "From: " {$email} . "\r\n" .
		"CC: somebodyelse@example.com";
		
		mail($to,$subject,$txt,$headers);
		
		header("Location: contact.html");
		
		
	}



?>
