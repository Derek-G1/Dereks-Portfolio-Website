<?php
if($_SERVER["REQUEST_METHOD"] != "POST")
{
    header("HTTP/1.1 404 Not Found");
    die();
}
$to = "support@tribblewebdesign.com";
$subject = "Message from Tribble Website";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= "From: $name <$email>\r\n";

mail($to,$subject,$message,$headers);
?>