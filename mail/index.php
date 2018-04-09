<?php

$domain_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$newURL = $_GET['url'] . '/msg:ko';
header("Content-type: application/json");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Origin: " . $domain_url);
header("AMP-Access-Control-Allow-Source-Origin: " . $domain_url);
header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin"); 
// Check for empty fields
if(empty($_GET['name']) ||
   empty($_GET['message']))
{
  echo json_encode(array('successmsg'=>'ERROR'));

} else {
  $name = $_GET['name'];
  $message = $_GET['message'];
  $date = date("Y/m/d");

  // Create the email and send the message
  $to = 'menos5@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
  $email_subject = "Formulario de contacto:  $name";
  $email_body = "Nuevo mensaje desde el web tomascornelles.com.\n\n"."Aqui están los detalles:\n\nNombre: $name\n\nMensaje:\n$message";
  $headers = "From: menos5@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

  if(mail($to,$email_subject,$email_body,$headers)) {
    $newURL = $_GET['url'] . '/msg:ok';
  } else {
    echo json_encode(array('successmsg'=>'No envia'));
  }
}

header('Location: '.$newURL);