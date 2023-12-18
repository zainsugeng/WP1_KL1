<!-- <?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_form = 'info@yourwebsite.com'

$email_subject ='New Form SUBS'

$email_body = "User Name : $name.\n".
                "User Name : $visitor_email.\n".
                "Subject : $subject.\n".
                "User Message : $message.\n";

$to = '17221038@gmail.com';

$header = "From : $email_form \r\n";

$header = "Reply To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?> -->