<?php

	 $val= $_POST['val'];

	 $toemail='chad@newlanguagestudio.com'; // change this to your email id

	 $name = $val['name'];

	 $email = $val['email'];

	 $website = $val['website'];

	 $category = $val['cate'];

	 $msg = $val['msg'];

	$subject = 'Message from Bootstrap Form Tutorial Demo - InfoTuts';

	$headers = "From: admin@infotuts.com \r\n";

	$headers .= "MIME-Version: 1.0\r\n";

	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	&nbsp;

	$message = "<b>Name :</b>".$name."<br>";

	$message .='<b>Email :</b>'.$email."<br>";

	$message .='<b>Website :</b>'.$website."<br>";

	$message .='<b>Category :</b>'.$category."<br>";

	$message .='<b>Message :</b>'.$msg;

	mail($toemail, $subject, $message, $headers);

	echo "Thanks for contacting us!";

	?>
