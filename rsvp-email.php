<?php 

require "sendgrid-php/sendgrid-php.php";

$email = $_POST['email'];
$name = $_POST['name'];
$guestname = $_POST['name-of-guest'];
$mobile = $_POST['mobile-number'];
$attend = $_POST['attend'];

$body = "<html>
<body>
<p><b>Name:</b> $name</p>
<p><b>Name of Guest:</b> $guestname</p>
<p><b>Mobile:</b> $mobile</p>
<p><b>Email:</b> $email</p>
<p><b>Response:</b> $attend</p>
</body>
</html>";

$from = new SendGrid\Email(null,"paulo.militante@gmail.com");
$subject = "RSVP - $name";
$to = new SendGrid\Email(null, "paulo.militante@gmail.com");
$content = new SendGrid\Content("text/html", $body);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

header("location: index.php");

?>