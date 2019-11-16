<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comments = $_POST['comments'];
$token = "1015682144:AAEvqWNcoT3Y3EMeOwcalfd162OOdi9YVIQ";
$chat_id = "-1001344991527";
$arr = array(
  'Numele de Utilizator: ' => $name,
  'Telefon: ' => $phone,
  'Email' => $email,
  'Comentariul' => $comments
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