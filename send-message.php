<?php
// archivo: notificar.php

$token = "7786625902:AAHc0n-r3nq0_IX7dpibp-io431roMmo3KE";
$chat_id = "-1002425722535";
$mensaje = "👀 Alguien ha visitado tu página web";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($mensaje));
?>
