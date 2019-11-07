<?php

/* https://api.telegram.org/bot1015682144:AAEvqWNcoT3Y3EMeOwcalfd162OOdi9YVIQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['email_address'];
$coment = $_POST['comments'];
$token = "1015682144:AAEvqWNcoT3Y3EMeOwcalfd162OOdi9YVIQ";
$chat_id = "-1001344991527";
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
