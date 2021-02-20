<?php

/* https://api.telegram.org/bot1664575498:AAGJ_BszAmDg77fojNXsoI1YKvZp3-0GYnc/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1664575498:AAGJ_BszAmDg77fojNXsoI1YKvZp3-0GYnc";
$chat_id = "-590909334";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>