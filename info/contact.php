<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'georgebarnick@gmail.com';

$subject = 'Message from georgebarnick.photo visitor ' . $field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = "From: visitor@georgebarnick.photo\r\n";
$headers .= "Reply-To: $field_email\r\n";

if ($field_email != null && $field_message != null) {
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
}

if ($mail_status && $field_email != null && $field_message != null) { ?>
    <script language="javascript" type="text/javascript">
		window.location = '../info/?result=success#Contact';
    </script>
<?php
} else { ?>
    <script language="javascript" type="text/javascript">
		window.location = '../info/?result=error&name=<?php echo $field_name; ?>&email=<?php echo $field_email; ?>&message=<?php echo $field_message ?>#Contact';
    </script>
<?php
}?>
