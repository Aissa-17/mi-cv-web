<?php
// Lee datos de /datos/perfil.json para usar en toda la web
$rutaPerfil = __DIR__ . '/../../datos/perfil.json';
$perfil = is_file($rutaPerfil) ? json_decode(file_get_contents($rutaPerfil), true) : [];
$nombre = $perfil['nombre'] ?? 'Aissa Allay';
$rol    = $perfil['rol'] ?? 'Desarrollador Web (PHP · WordPress · Docker)';
$links  = $perfil['links'] ?? [
  'github'   => 'https://github.com/tu_usuario',
  'linkedin' => 'https://linkedin.com/in/tu_usuario'
];
$tituloPagina = $tituloPagina ?? ($nombre . ' · ' . $rol);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($tituloPagina) ?></title>
  <meta name="description" content="CV web de <?= htmlspecialchars($nombre) ?>: <?= htmlspecialchars($rol) ?>. Proyectos, habilidades y contacto." />
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
  <meta property="og:title" content="<?= htmlspecialchars($tituloPagina) ?>">
  <meta property="og:description" content="Proyectos, habilidades y contacto." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/img/foto-perfil.jpg" />

  <!-- Fallback accesible: si hay JS, activo animaciones -->
  <script>document.documentElement.classList.add('js');</script>

  <link rel="stylesheet" href="/css/base.css">
  <link rel="stylesheet" href="/css/layout.css">
  <link rel="stylesheet" href="/css/componentes.css">

  <?php
  $schema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "name" => $nombre,
    "jobTitle" => $rol,
    "url" => (isset($_SERVER['HTTP_HOST']) ? ((isset($_SERVER['HTTPS'])?'https':'http').'://'.$_SERVER['HTTP_HOST']) : ''),
    "sameAs" => array_values($links)
  ];
  ?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body class="tema-oscuro">
<header class="barra">
  <div class="contenedor barra__contenido">
    <a class="marca" href="/index.php"><?= htmlspecialchars($nombre) ?></a>
    <nav class="menu" id="menu">
      <a href="/index.php#habilidades">Habilidades</a>
      <a href="/proyectos.php">Proyectos</a>
      <a href="/sobre-mi.php">Sobre mí</a>
      <a class="btn btn--primario" href="/contacto.php">Contacto</a>
      <a class="icono" href="<?= htmlspecialchars($links['github']) ?>" target="_blank" rel="noopener">GitHub</a>
      <a class="icono" href="<?= htmlspecialchars($links['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a>
    </nav>
    <button class="hamburguesa" aria-label="Abrir menú" data-abrir>☰</button>
  </div>
</header>
<main class="main">
