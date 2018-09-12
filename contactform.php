<?php
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$mailFrom = $_POST['email'];
		$email = $_POST['message'];

		$mailTo = "jschnebelen@mail.usf.edu";
		$headers = "From: ".$mailFrom;

		mail($mailTo, $email, $headers);
		header("Location: contact.html");
	}
?>