<?php
return [
  // Ejemplos de host:
  // Gmail: 'smtp.gmail.com'
  // Brevo/Sendinblue: 'smtp-relay.brevo.com'
  // Mailtrap (tests): 'smtp.mailtrap.io'
  'host'       => 'smtp-relay.brevo.com',
  'port'       => 587,
  'encryption' => 'tls', // 'ssl' si tu proveedor lo pide
  'username'   => 'TU_USUARIO_SMTP',
  'password'   => 'TU_PASSWORD_SMTP',

  // Remitente (dominio real; si usas Gmail, este debe ser tu Gmail)
  'from_email' => 'tu-remitente@tudominio.com',
  'from_name'  => 'Aissa Allay',

  // Destino (donde recibes los mensajes del formulario)
  'to_email'   => 'aissa.allay@gmail.com',
  'to_name'    => 'Aissa Allay'
];
