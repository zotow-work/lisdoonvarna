<?php
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$quantity = trim($_POST["quantity"]);
$token = "put_token_here";
// Chat ID find https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates where XXXXXXXXXXXXXXXXXXXXXXX is our token
$chat_id = "put_chat_id";
$arr = array(
    'Name:' => $name,
    'Mail:' => $email,
    'Phone:' => $phone,
    'Quantity:' => $quantity

);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
header('Location: http://ukranianfest.zotow.work/?result=succsess');
