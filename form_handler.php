<?php
$name = $POST['name'];
$visitor_email = $POST['email'];
$asunto = $POST['asunto'];
$mensaje = $POST['message'];

//$email_asunto = 'Preguntas de usuarios';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $asunto.\n".
                      "User Message: $mensaje.\n";

$to = 'A01750910@tec.mx';

$email_from = 'aldamichelle.2@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $asunto, $email_body, $headsers);

header("Location: citas.html");
?>