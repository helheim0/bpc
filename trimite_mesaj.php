<?php

if(!isset($_POST['submit'])){
  echo "Eroare!";
}

$name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["subject"];

//Validate input
if(empty($name) || empty($last_name)){
  echo "Numele este obligatoriu.";
  exit;
}
elseif (empty($email)) {
    echo "Adresa de e-mail este obligatoriu.";
    exit;
}
elseif (empty($message)) {
  echo "Vă rugăm introduceți un mesaj.";
  exit;
}

//$email_to = "prelatesicaroseriibv@gmail.com";
$email_to = "helgu77@yahoo.com";

$subject = "Mesaj de la website Form"
$email_body = "Ați primit un mesaj nou de la $last_name . $name.\n".
              "Adresa de email: $email".
              "Mesajul primit:\n $message".
$headers = "De la: $email \r\n";
//Send
mail($email_to, $subject, $email_body, $headers);
echo "Mesaj trimis!";
 ?>
