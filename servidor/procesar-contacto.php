<?php
// Procesamiento MUY simple. En hosting real, considera un servicio SMTP.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /contacto.php'); exit; }

$hp     = $_POST['web'] ?? '';
$nombre = trim($_POST['nombre'] ?? '');
$email  = trim($_POST['email'] ?? '');
$msj    = trim($_POST['mensaje'] ?? '');

if ($hp !== '' || $nombre === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $msj === '') {
  header('Location: /contacto.php?error=1'); exit;
}

$to   = 'aissa.allay@gmail.com';
$subj = 'Contacto desde la web CV';
$body = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$msj\n";
$head = "From: $nombre <$email>\r\nReply-To: $email";

if (@mail($to, $subj, $body, $head)) {
  header('Location: /contacto.php?ok=1'); 
} else {
  header('Location: /contacto.php?error=1');
}
