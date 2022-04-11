<?php
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$quantity = trim($_POST["quantity"]);
$token = "5123131821:AAEza_RcUSbGMGUYKE0E7sMy5t_E2aTkfmc";
// Chat ID find https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates where XXXXXXXXXXXXXXXXXXXXXXX is our token
$chat_id = "114178983";
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