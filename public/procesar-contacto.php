<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /contacto.php'); exit; }

// Honeypot
$hp     = $_POST['web'] ?? '';
$nombre = trim($_POST['nombre'] ?? '');
$email  = trim($_POST['email'] ?? '');
$msj    = trim($_POST['mensaje'] ?? '');

if ($hp !== '' || $nombre === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $msj === '') {
  header('Location: /contacto.php?error=1'); exit;
}

// Sanitizado básico
$nombre = substr(preg_replace('/[\r\n]+/', ' ', $nombre), 0, 120);
$email  = substr(preg_replace('/[\r\n]+/', ' ', $email), 0, 120);

// Carga configuración SMTP
$cfg = require __DIR__ . '/config.smtp.php';

// Autoload PHPMailer (carpeta que subiste)
require __DIR__ . '/lib/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/lib/PHPMailer/src/SMTP.php';
require __DIR__ . '/lib/PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
  // Servidor SMTP
  $mail->isSMTP();
  $mail->Host       = $cfg['host'];
  $mail->SMTPAuth   = true;
  $mail->Username   = $cfg['username'];
  $mail->Password   = $cfg['password'];
  $mail->Port       = (int)$cfg['port'];
  if (!empty($cfg['encryption'])) $mail->SMTPSecure = $cfg['encryption'];

  // Remitente y destinatario
  $mail->setFrom($cfg['from_email'], $cfg['from_name']);
  $mail->addAddress($cfg['to_email'], $cfg['to_name']);
  $mail->addReplyTo($email, $nombre); // responde al remitente real

  // Contenido
  $mail->Subject = 'Contacto desde la web CV';
  $bodyTxt = "Nombre: {$nombre}\nEmail: {$email}\n\nMensaje:\n{$msj}\n";
  $mail->Body    = $bodyTxt;
  $mail->AltBody = $bodyTxt;

  // Encoding
  $mail->CharSet  = 'UTF-8';
  $mail->isHTML(false);

  $mail->send();
  header('Location: /contacto.php?ok=1'); 
} catch (Exception $e) {
  // Log de errores para depurar en hosting
  @file_put_contents(__DIR__ . '/logs-mail.txt', date('c') . ' | ' . $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
  header('Location: /contacto.php?error=1');
}
