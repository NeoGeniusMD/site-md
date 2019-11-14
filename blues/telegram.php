<?php

/* https://api.telegram.org/bot992055921:AAFkoTpKcknMowa8jUFblB0noV-FNsI8xfU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['first_name'];
$email = $_POST['email_address'];
$coment = $_POST['comments'];
$token = "992055921:AAFkoTpKcknMowa8jUFblB0noV-FNsI8xfU";
$chat_id = "-206263142";
$arr = array(
  'Numele Utilizatorului: ' => $name,
  'Comentariul: ' => $coment
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
