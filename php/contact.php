<?php

/* Subject and Email Variables */

	$emailSubject = "Here is my contact information.";
	
/* Gathering Data Variables */

	$nameField = $_POST['name'];
	$emailField = $_POST['email'];
	$messageField = $_POST['message'];
	
	$body = <<<EOD
<br><hr><br>
Name: $nameField <br><br>
Email: $emailField <br><br>
Message: $messageField <br><br>
EOD;

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html; charset: utf8\r\n";
	$success = mail('cameronhirbodi@outlook.com', $emailSubject, $body, $headers);

/* Results rendered as HTML */

	$theResults = <<<'EOD'
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks for reaching out!</title>
</head>
<div>
Thanks for reaching out. I will be in touch with you very soon. 
<br><br>
<a href="http://www.cameronhirbodi.com">Back</a>
</div>
<body>
</body>
</html>
EOD;
echo "$theResults";

?>
