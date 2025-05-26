<?php
// Configura tu bot y chat ID
$botToken = '7786625902:AAHc0n-r3nq0_IX7dpibp-io431roMmo3KE';
$chatId = '-1002425722535';
$mensaje = "👀 Alguien ha visitado tu página web";

// Telegram API URL
$apiURL = "https://api.telegram.org/bot$botToken/sendMessage";

// Parámetros
$params = [
    'chat_id' => $chatId,
    'text' => $mensaje
];

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar solicitud
$response = curl_exec($ch);
curl_close($ch);

// Opcional: registrar errores o respuestas si es necesario
// file_put_contents('log.txt', $response . PHP_EOL, FILE_APPEND);
?>
